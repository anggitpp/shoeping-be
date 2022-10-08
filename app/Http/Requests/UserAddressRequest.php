<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAddressRequest extends FormRequest
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

    //create rules required for title, subtitle, name, phone number, detail, longitutude, latitude with indonesian messages
    public function rules()
    {
        return [
            'title' => 'required',
            'subtitle' => 'required',
            'name' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'detail' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul harus diisi',
            'subtitle.required' => 'Sub judul harus diisi',
            'name.required' => 'Nama harus diisi',
            'phone_number.required' => 'Nomor telepon harus diisi',
            'address.required' => 'Alamat harus diisi',
            'detail.required' => 'Detail alamat harus diisi',
            'longitude.required' => 'Longitude harus diisi',
            'latitude.required' => 'Latitude harus diisi',
        ];
    }

}
