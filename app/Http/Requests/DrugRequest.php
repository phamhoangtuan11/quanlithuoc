<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DrugRequest extends FormRequest
{
    public function rules(): array {
        return [
            'name' => 'required|string|max:255',
            'product_code' => 'required|string|unique:drugs,product_code',
            'expiration_date' => 'required|date',
            'manufacturer' => 'required|string',
            'price' => 'required|numeric|min:0',
        ];
    }
}
