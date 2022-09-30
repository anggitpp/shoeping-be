<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'name' => 'required|min:3',
            'image' => 'max:2048',
            'description' => 'nullable',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama harus diisi',
            'name.min' => 'Nama minimal 3 karakter',
            'image.max' => 'Ukuran file maksimal 2MB',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
