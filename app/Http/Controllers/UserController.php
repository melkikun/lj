<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {

    private $request;

    function __construct(Request $request) {
        $this->request = $request;
    }

    public function cekLogin(\App\Http\Requests\LoginRequest $lr) {
        // $username = $this->request->input("username");
        // $password = $this->request->input("password");
        // $usi = new usi();
        // $status = $usi->login($username, $password);
        // if($status == true){
        //     echo "berhasil login";
        //     return redirect()->route('home');
        // }else{
        //     return redirect()->back()->withInput()->withErrors(['msg'=>'UserName Atau Password Anda Salah']);
        // }
    }

}
