<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
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

    //create validation for user_id, payment_method_id, address_id with indonesian messages
    public function rules(): array
    {
        return [
            'user_id' => 'required',
            'payment_method_id' => 'required',
            'address_id' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'user_id.required' => 'User harus diisi',
            'payment_method_id.required' => 'Metode pembayaran harus diisi',
            'address_id.required' => 'Alamat harus diisi',
        ];
    }
}
