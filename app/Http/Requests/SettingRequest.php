<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
          'setting.affiliate_percent.level_1' => ['required','numeric','gte:0'],
          'setting.affiliate_percent.level_2' => ['required','numeric','gte:0'],
          'setting.affiliate_percent.level_3' => ['required','numeric','gte:0'],
          'setting.affiliate_percent.level_4' => ['required','numeric','gte:0'],
          'setting.is_withdraw' => ['boolean'],
          'setting.withdraw_limit' => ['required','numeric','gte:0'],
        ];
    }

    public function messages()
    {
        return[
          'setting.affiliate_percent.level_1.required' => 'The field level1 is required.',
          'setting.affiliate_percent.level_2.required' => 'The field level2 is required.',
          'setting.affiliate_percent.level_3.required' => 'The field level3 is required.',
          'setting.affiliate_percent.level_4.required' => 'The field level4 is required.',
          'setting.withdraw_limit.required' => 'The withdraw limit field is required.',


          'setting.affiliate_percent.level_1.numeric' => 'The level1 must be a number.',
          'setting.affiliate_percent.level_2.numeric' => 'The level2 must be a number.',
          'setting.affiliate_percent.level_3.numeric' => 'The level3 must be a number.',
          'setting.affiliate_percent.level_4.numeric' => 'The level4 must be a number.',
          'setting.withdraw_limit.numeric' => 'The withdraw limit must be a number.',

          'setting.affiliate_percent.level1.gte' => 'The level1 must be greater than or equal to 0.',
          'setting.affiliate_percent.level2.gte' => 'The level2 must be greater than or equal to 0.',
          'setting.affiliate_percent.level3.gte' => 'The level3 must be greater than or equal to 0.',
          'setting.affiliate_percent.level4.gte' => 'The level4 must be greater than or equal to 0.',


        ];

    }
}
