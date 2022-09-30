<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStockRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'size' => 'required',
            'stock' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'size.required' => 'Ukuran wajib diisi',
            'stock.required' => 'Stok wajib diisi',
        ];
    }
}
