<?php

namespace App\Http\Requests;

use App\Facades\CryptoFacade;
use App\Models\Crypto;
use App\Models\Tariff;
use App\Models\UserTariff;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class PayFromBalanceRequest extends FormRequest
{
    public Tariff|Builder $tariff;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $this->tariff = Tariff::query()->where('id', $this->request->get('tarif_plan_reinvest'))->firstOrFail();

        return [
            'tarif_plan_reinvest' => ['required', Rule::exists('tariffs', 'id')],
            'wallet_type' => ['required', Rule::exists('cryptos', 'network')],
            'm_amount' => ['required',function($attribute, $value, $fail){
                $crypto_balance = Crypto::query()
                    ->where('network',$this->request->get('wallet_type'))
                    ->with('user',function ($q){
                        return $q->where('user_id',Auth::id());
                    })
                    ->first();

                if($crypto_balance->user->count() == 0){
                    $fail('Not enough funds on your account balance');
                }


                $to_crypto = CryptoFacade::xChangeToUSDT($value,'USD',$this->request->get('wallet_type'));


                if($crypto_balance->user->count() && $crypto_balance->user[0]->pivot->balance < $to_crypto){
                    //$fail("Insufficient ". $this->request->get('wallet_type') ." balance for buy token");
                    $fail('Not enough funds on your account balance');
                }

            } ,function ($attribute, $value, $fail) {
                if (!($value >= $this->tariff->min_price && $value <= $this->tariff->max_price)) {
                    $fail("The amount of this tariff should be from ".$this->tariff->min_price."$ to ".$this->tariff->max_price."$");
                }
            },function($attribute, $value, $fail){
                $user_tariff = UserTariff::query()
                    ->where('user_id',\auth()->id())
                    ->where('tariff_id',$this->tariff->id)
                    ->latest()
                    ->first();

                if($user_tariff) {
                    $replay_time = Carbon::make($user_tariff->created_at)->addHours($this->tariff->interval);

                    if(!$replay_time->lt(now())){
                        $fail("At the moment you have a working monkey, you can buy the same monkey after $replay_time");
                    }
                }
            }]
        ];
    }
}
