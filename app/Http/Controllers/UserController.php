<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Impl\UserServiceImpl as usi;
// use App\Http\Requests\LoginRequest;
class UserController extends Controller {

    private $request;

    function __construct(Request $request) {
        $this->request = $request;
    }

    public function login(\App\Http\Requests\LoginRequest $lr) {
        $username = $this->request->input("username");
        $password = $this->request->input("password");
        $usi = new usi();
        $status = $usi->login($username, $password);
        if($status == true){
            return  redirect()->route("home");
        }else{
            return redirect()->back()->with(["gagal"=>"1"]);
        }
    }

}
