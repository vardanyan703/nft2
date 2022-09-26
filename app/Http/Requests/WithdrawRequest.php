<?php

namespace App\Http\Requests;

use App\Facades\CryptoFacade;
use App\Models\Crypto;
use App\Models\Setting;
use App\Models\WithdrawQuestion;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;

class WithdrawRequest extends FormRequest
{

    public $status = true;
    private $setting;

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
        return [
            'wallet_type' => ['required', Rule::exists('crypto_rates', 'network'),function($attribute, $value, $fail){
                $wallet = auth()->user()->load(['wallet_address' => function($q) use($value){
                    return $q->whereHas('crypto',function ($query) use($value){
                        return $query->where('network',$value);
                    });
                }]);
               if(!$wallet->wallet_address){
                   $fail('Specify your wallet address in the "Settings" section for ' . $this->request->get('wallet_type'));
               }
            }],
            'm_amount' => ['required', function ($attribute, $value, $fail) {
                $balance = auth()->user()->getBalance($this->request->get('wallet_type'));

                if($balance){
                    $crypto_amount = CryptoFacade::xChangeToUSDT($balance->pivot->balance,$this->request->get('wallet_type'),'USD');
                }

                if ($balance && $crypto_amount < $value) {
                    $fail('Not enough '.$this->request->get('wallet_type').' on available balance to withdraw.');
                }

            }],
        ];
    }

    public function messages()
    {
        return [
            'wallet_type.required' => 'Select payment system',
            'm_amount.required' => 'Enter amount'
        ];
    }

    private function withdrawPersonalAccess()
    {
        if ($this->status) {
            $this->status = auth()->user()->hasAccess('platform.payment.withdraw');
        }
    }

    private function withdrawAmountLimit()
    {
        if ($this->status) {
            $usd = CryptoFacade::xChangeToUSDT($this->request->get('m_amount'), $this->request->get('wallet_type'), 'USD');

            $this->status = $this->setting->withdraw_limit > $usd;
        }
    }

    private function withdrawCountLimit()
    {
        if ($this->status) {
            $questions = WithdrawQuestion::query()->where('user_id',auth()->id())->latest('id')->take(3)->get();

            if ($questions->count() && $questions->last()->created_at->diffInSeconds(now()) <= 3600) {
                $this->status = false;
            }
        }
    }

    public function passedValidation()
    {
        $this->setting = Setting::query()->first();


        if ($this->setting->is_withdraw) {
            $this->withdrawCountLimit();

            $this->withdrawPersonalAccess();

            $this->withdrawAmountLimit();
        } else {
            $this->status = false;
        }

    }

}
