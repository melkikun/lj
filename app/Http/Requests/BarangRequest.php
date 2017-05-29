<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BarangRequest extends FormRequest
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
        "nama"=>"required|unique:lj_mst_inv,inv_name"        
        ];
    }

    public function messages(){
        return [
        "nama.required"=>"nama barang tidak boleh kosong",
        "nama.unique"=>"nama barang sudah dipakai"
        ];
    }
}
