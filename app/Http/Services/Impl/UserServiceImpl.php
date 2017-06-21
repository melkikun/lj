<?php
/**
 * Description of UserServiceImpl
 *
 * @author IT01
 */


namespace App\Http\Services\Impl;
use App\Http\Services\UserService;
use Auth;
use App\User as user;
use Illuminate\Database\Eloquent\Collection;

class UserServiceImpl implements UserService{
    private $user;
    function __construct(user $user)
    {
        $this->user = $user;
    }

    //put your code here
    public function add(\App\User $user) {

    }

    public function delete($id) {

    }

    public function edit($id) {

    }

    public function listUser() : Collection{
        return $this->user->orderBy('user_name')->get();
    }

    public function login($username, $password) {
        $berhasil = false;
        if (Auth::attempt(['user_name' => $username, 'password' => $password])) {
            $berhasil = true;
        }
        return $berhasil;
    }

}
