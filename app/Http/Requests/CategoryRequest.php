<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name'=> 'required',
            'num_of_types'=> 'required',
        ];
    }

    public function messages()
    {
        return [
            "name.required"=>"Please enter the category name",
            "num_of_types.required"=>"Please enter the number of plants",
           
        ];
    }
}
