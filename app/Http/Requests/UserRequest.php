<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        "nama"=>"required|unique:lj_user_login,user_name",
        "password"=>"required",
        "password2"=>"required"
        ];
    }

    public function messages(){
        return [
        "nama.required"=>"nama user tidak boleh kosong",
        "nama.unique"=>"nama user sudah dipakai",
        "password.required"=>"password tidak boleh kosong",
        "password2.required"=>"password tidak boleh kosong"
        ];
    }
}
