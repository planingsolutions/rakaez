<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Loginrequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|email' ,
            'password' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => ' البريد الالكتروني مطلوب',
            'password.required' => 'كلمة المرور مطلوبة '
        ];
    }
}
