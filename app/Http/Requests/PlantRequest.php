<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlantRequest extends FormRequest
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
            'name'=> 'required',
            'category_id'=> 'required',
           // 'uploadfile' => 'required|mimes:jpeg,png,jpg|max:2048',
            // 'description' => 'required',
            'stock' => 'required',
            'price'=> 'required',
            // 'care_instructions'=> 'required',
        ];
    }

    public function messages()
    {
        return [
            "name.required"=>"Please enter the Plant name",
            'category_id.required'=>"Please select the category",
           // 'uploadfile.required'=>"Please select the image",
            // 'description.required'=>"Please enter the description",
            'price' => 'Please enter the price',
            'stock' => 'Please enter the number of plants in stock',
            // 'care_instructions.required'=>"Please enter the care instructions",
           
        ];
    }
}
