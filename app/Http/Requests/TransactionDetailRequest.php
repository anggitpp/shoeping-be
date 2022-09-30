<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionDetailRequest extends FormRequest
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

    public function rules(): array
    {
        return [
            'brand_id' => 'required',
            'product_id' => 'required',
            'stock_id' => 'required',
            'quantity' => 'required',
            'amount' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'brand_id.required' => 'Brand harus diisi',
            'product_id.required' => 'Produk harus diisi',
            'stock_id.required' => 'Size produk harus diisi',
            'quantity.required' => 'Jumlah harus diisi',
            'amount.required' => 'Total harga harus diisi',
        ];
    }
}
