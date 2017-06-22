<?php
/**
 * Description of UserServiceImpl
 *
 * @author IT01
 */


namespace App\Http\Services\Impl;
use App\Http\Services\UserService;
use Auth;
use DB;
use App\User as user;
use Illuminate\Database\Eloquent\Collection;

class UserServiceImpl implements UserService{
    private $user;
    function __construct(user $user)
    {
        $this->user = $user;
    }

    //put your code here
    public function add(array $request) {
        $nama = $request['nama'];
        $password = $request['password'];
        $sequence = DB::getSequence();
        $id = $sequence->nextValue('user_id_seq');
        $this->user->user_id = $id;
        $this->user->user_name = $nama;
        $this->user->user_pass = $password;
        $this->user->username = $nama;
        $save = $this->user->save();
        return $save;
    }

    public function delete($id) {
        $find = $this->user->find($id);
        $find->isactive = 0;
        $delete = $find->save();
        return $delete;
    }

    public function edit($id) {

    }

    public function listUser() : Collection{
        return $this->user->orderBy('user_name')->where('isactive', 1)->get();
    }

    public function login($username, $password) {
        $berhasil = false;
        if (Auth::attempt(['user_name' => $username, 'password' => $password])) {
            $berhasil = true;
        }
        return $berhasil;
    }

}
