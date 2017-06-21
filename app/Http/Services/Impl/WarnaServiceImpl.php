<?php

namespace App\Http\Services\Impl;

use App\Http\Services\WarnaService;
use App\Warna as warna;
use DB;
use Auth;

class WarnaServiceImpl implements WarnaService {

    private $warna;

    function __construct(warna $warna)
    {
        $this->warna = $warna;
    }

    function addWarna($request) {
       
    }

    function editWarna($id) {
        
    }

    function deleteWarna($id) {
       
    }

    function listWarna() {
        return $this->warna->select('nm_warna')->orderBy('nm_warna', 'asc')->get();
    }

}
