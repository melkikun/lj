<?php

namespace App\Http\Services\Impl;

use App\Http\Services\BarangService;
use App\Barang;
use DB;
use Auth;

class BarangServiceImpl implements BarangService {

    private $barang;

    function __construct(Barang $barang) {
        $this->barang = $barang;
    }

    function addBarang($request) {
        $nama = $request['nama'];
        $warna = $request['warna'];
        $jenis = $request['jenis'];
        $garansi = $request['garansi'];
        $type_garansi = $request['type_garansi'];
        $harga = str_replace(",", "", $request['harga']);
        $remark = $request['remark'];

        $sequence = DB::getSequence();
        $this->barang->inv_id = $sequence->nextValue('mst_inv_id_seq');
        $this->barang->inv_name = "$nama";
        $this->barang->inv_count_sys = "$jenis";
        $this->barang->inv_sign = Auth::user()->user_id;
        $this->barang->inv_wrty_dur = "$garansi";
        $this->barang->inv_rem = "$remark";
        $this->barang->inv_color = "$warna";
        $this->barang->inv_wrty_typ = "$type_garansi";
        $this->barang->inv_prc = "$harga";
        $save = $this->barang->save();
        return $save;
    }

    function editBarang($request) {
        $id = $request['id'];
        $nama = $request['nama'];
        $warna = $request['warna'];
        $jenis = $request['jenis'];
        $garansi = $request['garansi'];
        $type_garansi = $request['type_garansi'];
        $harga = $request['harga'];
        $remark = $request['remark'];
        //proses menemukan id
        $barang = $this->barang->find($id);
        $barang->inv_name = $nama;
        $barang->inv_count_sys = $jenis;
        $barang->inv_wrty_dur = $garansi;
        $barang->inv_rem = $remark;
        $barang->inv_color = $warna;
        $barang->inv_wrty_typ = $type_garansi;
        $barang->inv_prc = $harga;
        $edit = $barang->save();
        return $edit;
    }

    function deleteBarang($id) {
        $barang = $this->barang->find($id);
        $barang->isactive = 0;
        return $barang->save();
    }

    function listBarang() {
        return $this->barang->where('isactive', '1')->get();
    }

    function getBarang($id){
        return $this->barang->where("inv_id", $id)->first();
    }

}
