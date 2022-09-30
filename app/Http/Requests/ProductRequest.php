<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required',
            'price' => 'required|min:0|not_in:0',
            'image' => 'max:2000'
        ];
    }

    public function messages(): array
    {
        return [
            'brand_id.required' => 'Brand harus dipilih',
            'name.required' => 'Nama produk harus diisi',
            'image.max' => 'Ukuran gambar maksimal 2 MB',
            'price.required' => 'Harga produk harus diisi',
            'price.min' => 'Harga produk tidak boleh kurang dari 0',
            'price.not_in' => 'Harga produk tidak boleh 0',
        ];
    }


}
