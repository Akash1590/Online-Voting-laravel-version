<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class voterequest extends FormRequest
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
            'voterid'=>'required|numeric',
            'title'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'voterid.required' => 'You must fill up this Voterid field',
            'title.required' => 'You must fill up this title field',
            'voterid.numeric'=>'Voterid must be  numeric'

        ];
    }
}
