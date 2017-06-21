<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\TransportService as tsi;
use App\Http\Requests\KendaraanRequest as kr;
// untuk mengembalikan return view
use Illuminate\View\View;
//untuk mengembalikan return response
use Illuminate\Http\RedirectResponse;

class KendaraanController extends Controller
{
    #code
    private $tsi;
    function __construct(tsi $tsi)
    {
    	$this->tsi = $tsi;
    }

    public function addKendaraan() : View{
    	$current = "TAMBAH KENDARAAN";
    	return view('pages.kendaraan.add_kendaraan', compact('current'));
    }

    public function listKendaraan() : View{
    	$data = $this->tsi->listTransport();
    	$current = "LIST KENDARAAN";
    	return view('pages.kendaraan.list_kendaraan', compact('current', 'data'));
    }

    public function submitKendaraan(kr $request) : RedirectResponse{
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

    public function deleteKendaraan(int $id) : RedirectResponse{
        $delete = $this->tsi->deleteTransport($id);
        return redirect()->back()->with(['delete'=>$delete]);
    }
}
