<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class personrequest extends FormRequest
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
            'name'=>'required|string',
            'NID'=>'required|unique:person,NID|numeric',
            'date'=>'required',
            'Address'=>'required',
            'phoneno'=>'required|numeric',
            'email'=>'required|email',
            'Password'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'You must fill up this name field',
            'NID.required' => 'You must fill up this NID field',
            'date.required' => 'You must fill up this date field',
            'Address.required' => 'You must fill up this Address field',
            'phoneno.required' => 'You must fill up this phoneno field',
            'email.required' => 'You must fill up this  email field',
            'Password.required' => 'You must fill up this  Password field',
            'name.string' => 'Name is only string',
            'NID.numeric'=>'NID is numeric',
            'phoneno.numeric'=>'phoneno is numeric'

        ];
    }
}
