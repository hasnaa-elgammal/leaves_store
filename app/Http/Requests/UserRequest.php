<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name'=> 'required',
            'last_name'=> 'required',
            'mobile_number'=> 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            "first_name.required"=>"Please enter the first name",
            'last_name.required'=>"Please enter the last name",
            'mobile_number.required'=>"Please enter the mobile number",
            'email.required'=>"Please enter the email",
            'email.email'=>"You must enter a valid email",
            'email.unique'=>"This email already exists",
            'password.required'=>"Please enter the password",

           
        ];
    }
}
