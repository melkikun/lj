<?php
namespace App\Http\Services\Impl;
use App\Http\Services\BarangService;
use App\Barang;
use DB;
use Auth;
class BarangServiceImpl implements BarangService{
	private $barang;
	function __construct(Barang $barang)
	{
		$this->barang = $barang;
	}

	function addBarang($request){
		$nama = $request['nama'];
		$warna = $request['warna'];
		$jenis = $request['jenis'];
		$garansi = $request['garansi'];
		$type_garansi = $request['type_garansi'];
		$harga = $request['harga'];
		$remark = $request['remark'];

		$sequence = DB::getSequence();
		$this->barang->inv_id = $sequence->nextValue('mst_inv_id_seq');
		$this->barang->inv_name = "1";
		$this->barang->inv_count_sys = "1";
		$this->barang->inv_sign = Auth::user()->user_id;
		$this->barang->inv_wrty_dur = "1";
		$this->barang->inv_rem = "1";
		$this->barang->inv_color = "1";
		$this->barang->inv_wrty_typ = "1";
		$this->barang->inv_prc = "1";
		$save = $this->barang->save();
		return $save;
	}

	function editBarang(){

	}

	function deleteBarang(){

	}

	function listBarang(){

	}
}