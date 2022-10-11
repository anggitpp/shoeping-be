<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PromoRequest extends FormRequest
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
    //create rules for name, type, value with indonesian message
    public function rules(): array
    {
        return [
            'name' => 'required',
            'code' => 'required',
            'type' => 'required',
            'value' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama promo harus diisi',
            'code.required' => 'Kode promo harus diisi',
            'type.required' => 'Tipe promo harus diisi',
            'value.required' => 'Nilai promo harus diisi',
        ];
    }

}
