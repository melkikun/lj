<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\UserService as us;
use  Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
class UserController extends Controller {

    private $request;
    private $us;

    function __construct(Request $request, us $us) {
        $this->request = $request;
        $this->us = $us;
    }

    public function addUser():View{
        $current = "TAMBAH USER LAUTAN JATI";
        return view("pages.user.add_user", compact('current'));
    }

    public function listUser():View{
        $current = "LIST USER LAUTAN JATI";
        $data = $this->us->listUser();
        return view('pages.user.list_user', compact('current', 'data'));
    }

    public function deleteUser($id):RedirectResponse{
        return redirect()->back()->with("delete", $this->us->delete($id));
    }

    public function submitUser(\App\Http\Requests\UserRequest $request) : RedirectResponse{
        $nama = $request->input("nama");
        $password = $request->input("password");
        $password2 = $request->input("password2");
        $request = array(
            "nama"=>$nama,
            "password"=>$password
            );
        $save = $this->us->add($request);
        return redirect()->back()->with(['save'=>$save]);
    }

}
