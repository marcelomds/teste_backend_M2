<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            "name" => 'required|min:3|unique:products',
            "description" => 'nullable',
            "price" => 'required',
            "product_discount_id" => 'required'
        ];
    }

    /**
     * @return array
     */
    public function messages(): array
    {
        return [
            "name.unique" => "Esse produto já está cadastrado",
            "product_discount_id.required" => "É obrigatório passar um ID de desconto"
        ];
    }
}
