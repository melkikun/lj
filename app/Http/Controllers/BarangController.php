<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Impl\BarangServiceImpl as bsi;

class BarangController extends Controller
{
    private $bsi;
    function __construct(Request $request, bsi $bsi)
    {
        $this->bsi = $bsi;
    }

    public function addBarang(){
    	return view('pages.barang.add');
    }

    public function lihatBarang(){
    	// return view('barang.list');
    }

    public function submitBarang(\App\Http\Requests\BarangRequest $br){
        echo $br->input("nama");
       //  $nama = $this->request->input("nama");
       //  $warna = $this->request->input("warna");
       //  $jenis = $this->request->input("jenis");
       //  $garansi = $this->request->input("garansi");
       //  $type_garansi = $this->request->input("type-garansi");
       //  $harga = $this->request->input("harga");
       //  $remark = $this->request->input("remark");

       //  $request = array(
       //      "nama"=>$nama,
       //      "warna"=>$warna,
       //      "jenis"=>$jenis,
       //      "garansi"=>$garansi,
       //      "type_garansi"=>$type_garansi,
       //      "harga"=>$harga,
       //      "remark"=>$remark
       //      );
       // $response =  $this->bsi->addBarang($request);
        
    }
}
