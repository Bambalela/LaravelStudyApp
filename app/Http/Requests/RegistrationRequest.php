<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'name' => 'required|min:2|max:20',
            'surname' => 'required|min:2|max:20',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required|min:8'
        ];
    }

    public function attributes()
    {
        // here we are changing our form fields names, when we are printing errors
        return [
            'password_confirmation' => 'password confirmation'
        ];
    }
    public function messages()
    {
        // here we can change all the message error message
        return [
            'name.required' => 'The field name must be filled'
        ];
    }

}
