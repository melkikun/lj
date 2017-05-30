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

	function editBarang(){

	}

	function deleteBarang(){

	}

	function listBarang(){

	}
}