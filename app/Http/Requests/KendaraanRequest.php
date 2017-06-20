<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KendaraanRequest extends FormRequest
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
        "jenis"=>"required|max:20",
        "plat"=>"required|unique:lj_mst_transport,transport_no|max:20",
        "sopir"=>"required|max:20",
        "kernet"=>"required|max:20"
        ];
    }

    public function messages(){
        return[
        "jenis.required"=>"nama transportasi tidak boleh kosong",
        "jenis.max"=>"nama transportasi maksimal 20 karakter",
        "plat.required"=>"plat nomor tidak boleh kosong",
        "plat.unique"=>"plat nomor sudah di pakai tolong ganti ke plat nomor lain",
        "plat.max"=>"plat nomor maksimal 20 karakter",
        "sopir.required"=>"nama sopir tidak boleh kosong",
        "sopir.max"=>"nama sopir maksimal 20 karakter",
        "kernet.required"=>"nama kernet tidak boleh kosong",
        "kernet.max"=>"nama kernet maksimal 20 karakter",
        ];
    }
}
