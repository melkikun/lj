<?php
/**
 * Description of UserServiceImpl
 *
 * @author IT01
 */


namespace App\Http\Services\Impl;
use App\Http\Services\UserService;
use Auth;


class UserServiceImpl implements UserService{
    //put your code here
    public function add(\App\User $user) {

    }

    public function delete($id) {

    }

    public function edit($id) {

    }

    public function listUser() {

    }

    public function login($username, $password) {
        $berhasil = false;
        if (Auth::attempt(['user_name' => $username, 'password' => $password])) {
            $berhasil = true;
        }
        return $berhasil;
    }

}
