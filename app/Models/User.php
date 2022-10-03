<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\URL;
use Orchid\Platform\Models\User as Authenticatable;
use ProtoneMedia\LaravelVerifyNewEmail\MustVerifyNewEmail;
use Rappasoft\LaravelAuthenticationLog\Traits\AuthenticationLoggable;

class User extends Authenticatable
{

    use AuthenticationLoggable, MustVerifyNewEmail;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'permissions',
        'pincode',
        'referred_by',
        'deposit',
        'structure_path',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'permissions',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'permissions' => 'array',
        'email_verified_at' => 'datetime',
    ];

    /**
     * The attributes for which you can use filters in url.
     *
     * @var array
     */
    protected $allowedFilters = [
        'id',
        'name',
        'email',
        'permissions',
    ];

    /**
     * The attributes for which can use sort in url.
     *
     * @var array
     */
    protected $allowedSorts = [
        'id',
        'name',
        'email',
        'updated_at',
        'created_at',
    ];

    public const AFFILIATE_PROGRAM_PERCENTS = [
        5,
        3,
        1,
        1,
    ];

    public static function getUserReferrals($filter)
    {
        return self::query()
            ->where('referred_by', auth()->user()->id)
            ->filter($filter)
            ->with('referrals')
            ->withCount('referrals')
            ->paginate(5);
    }

    public static function getAuthReferralsCount()
    {
        return self::query()
            ->where('id', auth()->user()->id)
            ->with(['referralsHistory'])
            ->withCount('referrals')
            ->first();
    }

    public function referrals(): HasMany
    {
        return $this->hasMany(self::class, 'referred_by', 'id');
    }

    public function referralsHistory(): HasMany
    {
        return $this->hasMany(ReferralHistory::class, 'user_id', 'id');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'referred_by', 'id');
    }

    public function nestedParent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'referred_by', 'id')->with('nestedParent');
    }

    public function tariffs(): BelongsToMany
    {
        return $this->belongsToMany(Tariff::class, 'user_tariffs', 'user_id', 'tariff_id')
            ->withPivot(['created_at', 'status', 'deposit', 'total_deposit', 'txn_id', 'stop_at', 'created_at', 'network']);
    }

    public function cryptos(): BelongsToMany
    {
        return $this->belongsToMany(Crypto::class, 'crypto_user', 'user_id', 'crypto_id')
            ->withPivot('id', 'deposit', 'balance', 'earned_total', 'withdraw');
    }

    public function wallet_addresses(): HasMany
    {
        return $this->hasMany(MyWallet::class, 'user_id', 'id');
    }

    public function wallet_address(): HasOne
    {
        return $this->hasOne(MyWallet::class, 'user_id', 'id');
    }

    public function scopeFilter($query, $filters): Builder
    {

        return $filters->apply($query);
    }

    public static function getUserByIdOrName($buyer, $currency)
    {
        if ($buyer instanceof self) {
            $buyer = $buyer->id;
        }

        return self::query()
            ->where('id', $buyer)
            ->orWhere('name', $buyer)
            ->with('cryptos', fn($q) => $q->where('network', $currency))
            ->first();
    }

    public static function updateOrAttachCrypto($buyer_id, $received_amount, $currency)
    {
        $user = self::getUserByIdOrName($buyer_id, $currency);

        if ($user->cryptos->count()) {
            $user->cryptos()
                ->newPivotStatement()
                ->where('id', $user->cryptos[0]->pivot->id)
                ->update([
                    'deposit' => DB::raw("deposit+$received_amount"),
                    'updated_at' => now()
                ]);
        } else {
            $crypto = Crypto::query()->where('network', $currency)->first();

            $user->cryptos()->attach($crypto->id, [
                'deposit' => $received_amount,
                'created_at' => now()
            ]);
        }

        return $user;
    }

    /**
     * @param $buyer_id
     * @param $received_amount
     * @param $currency
     * @return Builder|\Illuminate\Database\Eloquent\Model|object|null
     */
    public static function updateOrAttachCryptoByAffiliate($buyer_id, $received_amount, $currency)
    {
        $user = self::getUserByIdOrName($buyer_id, $currency);

        if ($user->cryptos->count()) {
            $user->cryptos()
                ->newPivotStatement()
                ->where('id', $user->cryptos[0]->pivot->id)
                ->update([
                    'balance' => DB::raw("balance+$received_amount"),
                    'earned_total' => DB::raw("earned_total+$received_amount"),
                    'updated_at' => now()
                ]);
        } else {
            $crypto = Crypto::query()->where('network', $currency)->first();

            $user->cryptos()->attach($crypto->id, [
                'balance' => $received_amount,
                'earned_total' => $received_amount,
                'deposit' => 0,
                'created_at' => now()
            ]);
        }

        return $user;
    }

    public static function updateCryptosFromBalance($user, $network, $received_amount)
    {
        $user = self::getUserByIdOrName($user, $network);

        $user->cryptos()
            ->newPivotStatement()
            ->where('id', $user->cryptos[0]->pivot->id)
            ->update([
                'balance' => DB::raw("balance-$received_amount"),
                'deposit' => DB::raw("deposit+$received_amount"),
                'updated_at' => now()
            ]);
    }

    public static function withdrawCryptosFromBalance($user, $network, $received_amount)
    {
        $user = self::getUserByIdOrName($user, $network);

        $user->cryptos()
            ->newPivotStatement()
            ->where('id', $user->cryptos[0]->pivot->id)
            ->update([
                'balance' => DB::raw("balance-$received_amount"),
                'withdraw' => DB::raw("withdraw+$received_amount"),
                'updated_at' => now()
            ]);
    }

    public static function updateOrAttachCryptoDeposit($user, $network, $received_amount)
    {
        $user = self::getUserByIdOrName($user, $network);

        $user->cryptos()
            ->newPivotStatement()
            ->where('id', $user->cryptos[0]->pivot->id)
            ->update([
                'deposit' => DB::raw("$received_amount"),
                'updated_at' => now()
            ]);
    }

    public static function updateOrAttachCryptoBalance($user, $network, $received_amount)
    {
        $user = self::getUserByIdOrName($user, $network);

        $user->cryptos()
            ->newPivotStatement()
            ->where('id', $user->cryptos[0]->pivot->id)
            ->update([
                'balance' => DB::raw("$received_amount"),
                'updated_at' => now()
            ]);
    }

    public static function updateOrAttachCryptoEarnedTotal($user, $network, $received_amount)
    {
        $user = self::getUserByIdOrName($user, $network);

        $user->cryptos()
            ->newPivotStatement()
            ->where('id', $user->cryptos[0]->pivot->id)
            ->update([
                'earned_total' => DB::raw("$received_amount"),
                'updated_at' => now()
            ]);
    }


    public function newEmail(string $email, callable $withMailable = null): ?Model
    {
        $user = auth()->user();
        return $this->createPendingUserEmailModel($email)->tap(function ($model) use ($user, $withMailable) {
            $this->sendPendingEmailVerificationMail($user, $withMailable);
        });
    }

    public function createPendingUserEmailModel(string $email): Model
    {
        $this->clearPendingEmail();

        return $this->getEmailVerificationModel()->create([
            'user_type' => get_class($this),
            'user_id' => $this->getKey(),
            'email' => $email,
            'token' => Password::broker()->getRepository()->createNewToken(),
        ]);
    }

    public function sendPendingEmailVerificationMail(Model $pendingUserEmail, callable $withMailable = null)
    {
        $mailableClass = config('verify-new-email.mailable_for_first_verification');


        $mailable = new $mailableClass($pendingUserEmail, $this->verificationUrl());

        if ($withMailable) {
            $withMailable($mailable, $pendingUserEmail);
        }

        return Mail::to($pendingUserEmail->email)->send($mailable);
    }

    public function verificationUrl(): string
    {
        $pending_user = $this->getEmailVerificationModel()->newQuery()->latest()->first();

        return URL::temporarySignedRoute(
            config('verify-new-email.route') ?: 'pendingEmail.verify',
            now()->addMinutes(config('auth.verification.expire', 60)),
            ['token' => $pending_user->token]
        );
    }

    public function getBalance($network)
    {
        return $this->cryptos()->where('network', $network)->first();
    }

}
