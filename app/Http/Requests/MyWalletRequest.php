<?php

namespace App\Http\Requests;

use App\Models\MyWallet;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class MyWalletRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'payment_system' => ['required'],
            'pincode' => ['required','min:4','max:4',function($attribute,$value,$fail){
                if (!Hash::check($value,auth()->user()->pincode)){
                   $fail('Please enter the valid PIN code');
                }
            }],
            'tag' => ['nullable'],
            'wallet_number' => ['required',Rule::unique('my_wallets')->ignore($this->id, 'id')],
            'wallet_allow_edit' => ['nullable'],
        ];
    }
}
