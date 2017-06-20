<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Impl\TransportServiceImpl as tsi;
use App\Http\Requests\KendaraanRequest as kr;

class KendaraanController extends Controller
{
    #code
    private $tsi;
    function __construct(tsi $tsi)
    {
    	$this->tsi = $tsi;
    }

    public function addKendaraan(){
    	$current = "TAMBAH KENDARAAN";
    	return view('pages.kendaraan.add_kendaraan', compact('current'));
    }

    public function listKendaraan(){
    	$data = $this->tsi->listTransport();
    	$current = "LIST KENDARAAN";
    	return view('pages.kendaraan.list_kendaraan', compact('current', 'data'));
    }

    public function submitKendaraan(kr $request){
        $jenis = $request->input("jenis");
        $plat = $request->input("plat");
        $kapasitas = $request->input("kapasitas");
        $sopir = $request->input("sopir");
        $kernet = $request->input("kernet");

        $request = array(
            "jenis"=>$jenis,
            "plat"=>$plat,
            "kapasitas"=>$kapasitas,
            "sopir"=>$sopir,
            "kernet"=>$kernet,
            );
       $save = $this->tsi->add($request);
       return redirect()->back()->with(['save'=>$save]);
    }
}
