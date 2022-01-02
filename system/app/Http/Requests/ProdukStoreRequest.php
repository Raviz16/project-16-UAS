<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ProdukStoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nama' => 'required',
            'foto' => 'required|foto',
            'stok' => 'required|unique:user,username',
            'harga' => 'required|harga',
            'berat' => 'required|berat'

        ];
    }

    function messages(){
        return[
            'nama.required' => 'Field Nama Wajib Diisi',
            'foto.required' => 'Field foto Wajib Diisi',
            'stok.required' => 'Field Stok Wajib Diisi',
            'harga.required' => 'Field Harga Wajib Diisi',
            'berat.required' => 'Field Berat Wajib Diisi',

        ];
    }
}
