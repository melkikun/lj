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
    	return view('pages.barang.list');
    }

    public function submitBarang(\App\Http\Requests\BarangRequest $br){
        $nama = $br->input("nama");
        $warna = $br->input("warna");
        $jenis = $br->input("jenis");
        echo "$jenis";
        $garansi = $br->input("garansi");
        $type_garansi = $br->input("type-garansi");
        $harga = $br->input("harga");
        $remark = $br->input("remark");

        if($garansi == ""){
            $garansi = 0;
        }

        if($harga == ""){
            $harga = 0;
        }

        $request = array(
            "nama"=>$nama,
            "warna"=>$warna,
            "jenis"=>$jenis,
            "garansi"=>$garansi,
            "type_garansi"=>$type_garansi,
            "harga"=>$harga,
            "remark"=>$remark
            );
        $response =  $this->bsi->addBarang($request);
        return redirect()->back()->with(["response"=>$response]);
    }
}
