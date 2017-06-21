<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\UserService as us;
use  Illuminate\View\View;
class UserController extends Controller {

    private $request;
    private $us;

    function __construct(Request $request, us $us) {
        $this->request = $request;
        $this->us = $us;
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

    public function listUser():View{
        $current = "LIST USER LAUTAN JATI";
        $data = $this->us->listUser();
        return view('pages.user.list_user', compact('current', 'data'));
        // echo "123";
    }

}
