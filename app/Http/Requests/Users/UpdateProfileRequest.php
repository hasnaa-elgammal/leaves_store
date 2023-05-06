<?php

namespace App\Http\Requests\Users;
use Illuminate\Support\Facades\Auth;


use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return Auth::check();
        return true;
    }

    
    public function rules()
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . auth()->user()->id,
            'mobile_number' => 'required|string|max:20|unique:users,mobile_number,' . auth()->user()->id,
            'role'=>'required',
            'password' => 'nullable|string|min:8|confirmed',
        ];
    }
}
