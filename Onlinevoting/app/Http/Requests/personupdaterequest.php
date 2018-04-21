<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class personupdaterequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'Address'=>'required',
            'phnNo'=>'required|numeric',
            'Email'=>'required|email',
            'Password'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'Address.required' => 'You must fill up this Address field',
            'phoneno.required' => 'You must fill up this phoneno field',
            'email.required' => 'You must fill up this  email field',
            'Password.required' => 'You must fill up this  Password field',
            'phoneno.numeric'=>'phoneno is numeric'

        ];
    }
}
