<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
{
    public function rules(): array {
        return [
            'drug_id' => 'required|exists:drugs,id',
            'type' => 'required|in:import,export',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'transaction_date' => 'required|date',
        ];
    }
}
