<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            "nama"=>"required|unique:lj_mst_cust,cust_nm|max:80",
            "alamat1"=>"required",
            "kota"=>"required",
            "provinsi"=>"required",
        ];
    }

    public function messages(){
        return [
        "nama.required"=>"nama customer tidak boleh kosong",
        "nama.unique"=>"nama customer sudah dipakai",
        "nama.max"=>"nama customer tidak boleh lebih dari 80 karakter",
        "alamat1.required"=>"alamat1 tidak boleh kosong",
        "kota.required"=>"kota tidak boleh kosong",
        "provinsi.required"=>"provinsi tidak boleh kosong",
        ];
    }
}
