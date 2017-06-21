<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Services\Impl;
use App\Transportasi as t;
use DB;
use Illuminate\Database\Eloquent\Collection;
/**
 * Description of TransportServiceImpl
 *
 * @author IT01
 */
class TransportServiceImpl implements \App\Http\Services\TransportService{
	private $t;

	function __construct(t $t)
	{
		$this->t = $t;
	}

    //put your code here
    public function add(array $request) : int {
        $jenis = $request['jenis'];
        $plat = $request['plat'];
        $kapasitas = $request['kapasitas'];
        $sopir = $request['sopir'];
        $kernet = $request['kernet'];
        $jenisKapasitas = "k";

        $sequence = DB::getSequence();
        $nomor = $sequence->nextValue('mst_transport_id_seq');

        $this->t->transport_id = $nomor;
        $this->t->transport_type = $jenis;
        $this->t->transport_no = $plat;
        $this->t->transport_capacity = $kapasitas;
        $this->t->transport_capacity_typ = $jenisKapasitas;
        $this->t->transport_drv = $sopir;
        $this->t->transport_drv_astn = $kernet;
        $save = $this->t->save();
        return $save;

    }

    public function deleteTransport(int $id) : int{
        $find = $this->t->find($id);
        $delete = $find->delete();
        return $delete;
    }

    public function editTransport(int $id) : int {

    }

    public function listTransport() : Collection{
        return $this->t->all();
    }

    public function hello(int $a) : ?int{
        $b = $a+"10";
        return null;
    }

}
