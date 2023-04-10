<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "email"=>"email|required",
            "subject"=>"required|min:3|max:255",
            "message"=>"required|min:3"
        ];
    }

    public function messages()
    {
        return [
            "email.required"=>"Please enter your email",
            "email.email"=>"Please enter a valid email",
            "subject.required"=>"Please enter the subject",
            "subject.min"=>"The subject must be at least 3 letters",
            "subject.max"=>"The subject must be at most 255 letters",
            "message.required"=>"Please enter your message",
            "message.min"=>"The message must be at least 3 letters"
        ];
    }
}
