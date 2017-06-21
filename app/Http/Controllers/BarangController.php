<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\BarangService as bsi;
use App\Http\Services\WarnaService as wsi;
class BarangController extends Controller
{
    private $bsi;
    private $wsi;

    function __construct(Request $request, bsi $bsi, wsi $wsi)
    {
        $this->bsi = $bsi;
        $this->wsi = $wsi;
    }

    public function addBarang(){
        $current = "TAMBAH BARANG";
        $warna = $this->wsi->listWarna();
    	return view('pages.barang.add_barang', compact('current', 'warna'));
    }

    public function lihatBarang(){
        $current = "LIHAT BARANG";
        $barang  = $this->bsi->listBarang();
    	return view('pages.barang.list_barang', compact('current', 'barang'));
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
        $save =  $this->bsi->addBarang($request);
        return redirect()->back()->with(["save"=>$save]);
    }

    public function deleteBarang($id){
        $response = $this->bsi->deleteBarang($id);
        if($response == 1){
           return redirect()->back()->with(['delete'=>$response]);
        }else{
            echo "Something Wrong Bro!!!!";
        }
    }
}
