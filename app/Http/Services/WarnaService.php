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
interface WarnaService {

    public function addWarna($request);

    public function editWarna($id);

    public function deleteWarna($id);

    public function listWarna();

}
