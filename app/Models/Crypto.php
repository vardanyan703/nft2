<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Crypto extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];


    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'crypto_user', 'crypto_id', 'user_id')
            ->withPivot('deposit','balance','earned_total');
    }

    public function xChangeToUSDT($crypto_amount, $crypto_network, $def = 'USDT.TRC20')
    {
        // api xchange
        $rate_usdt_trc_20 = CryptoRate::query()->where('network', $def)->first();
        $crypto_network = CryptoRate::query()->where('network', $crypto_network)->first();

        $received_amount_btc = $crypto_amount * $crypto_network->rate_btc;
        $usd_btc = $rate_usdt_trc_20->rate_btc;

        return (double)$received_amount_btc / (double)$usd_btc;
    }

    public static function nameByNetwork($network)
    {
        return self::query()->where('network',$network)->first()->name;
    }

    public function wallets(): HasMany{
        return $this->hasMany(MyWallet::class,'crypto_id','id');
    }
}
