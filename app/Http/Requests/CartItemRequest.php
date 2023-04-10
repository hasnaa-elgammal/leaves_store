<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartItemRequest extends FormRequest
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
            "product_id"=>"required",
            "quantity"=>"required|numeric",
        ];
    }

    public function messages()
    {
        return [
            "product_id.required"=>"Product ID is required",
            "quantity.numeric"=>"Quantity must be a number",
            "quantity.required"=>"Quantity is required",
        ];
    }
}
