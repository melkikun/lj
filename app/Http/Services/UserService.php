<?php
namespace App\Http\Services;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author IT01
 */
interface UserService {

    public function add(array $user);

    public function edit($id);

    public function delete($id);

    public function listUser();

    public function login($username, $password);
}
