<?php

namespace App\Http\Requests;

use App\Facades\CryptoFacade;
use App\Models\Tariff;
use App\Models\UserTariff;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ConfirmPaymnetRequest extends FormRequest
{
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
        $tariff = Tariff::query()->where('id', $this->request->get('tarif_plan'))->firstOrFail();

        return [
            'wallet_type' => ['required',Rule::exists('crypto_rates','network')],
            'tarif_plan' =>['required',Rule::exists('tariffs','id')],
            'm_amount' => ['required',function($attribute,$value,$fail) use($tariff){
                if (!($value >= $tariff->min_price && $value <= $tariff->max_price)){
                    $fail("The amount of this tariff should be from $tariff->min_price$ to $tariff->max_price$");
                }
            },function($attribute,$value,$fail) use($tariff){
                $user_tariff = UserTariff::query()
                    ->where('user_id',\auth()->id())
                    ->where('tariff_id',$tariff->id)
                    ->latest()
                    ->first();

                if($user_tariff) {
                    $replay_time = Carbon::make($user_tariff->created_at)->addHours($tariff->interval);

                    if(!$replay_time->lt(now())){
                        $fail("At the moment you have a working monkey, you can buy the same monkey after $replay_time");
                    }
                }
            }]
        ];
    }
}
