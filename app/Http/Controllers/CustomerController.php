<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\CustomerService as cs;
class CustomerController extends Controller
{
	private $request;
        private $cs;
    function __construct(Request $request, cs $cs)
    {
    	$this->request = $request;
        $this->cs = $cs;
    }

    function addCustomer(){
        $current = "TAMBAH CUSTOMER";
    	return view('pages.customer.add', compact('current'));
    }

    function lihatCustomer(){
         $current = "LIHAT CUSTOMER";
        $customer = $this->cs->listCustomer();
    	return view('pages.customer.list', compact('current', 'customer'));
    }

    function submitCustomer(\App\Http\Requests\CustomerRequest $request){
        $nama =  $request->nama;
        $alamat1 = $request->alamat1;
        $alamat2 = $request->alamat2;
        $alamat3 = $request->alamat3;
        $kota = $request->kota;
        $provinsi = $request->provinsi;
        $telepon1 = $request->telepon1;
        $telepon2 = $request->telepon2;
        $telepon3 = $request->telepon3;
        $hp1 = $request->hp1;
        $hp2 = $request->hp2;
        $cp1 = $request->cp1;
        $cp2 = $request->cp2;
        $fax = $request->fax;
        $email = $request->email;
        $top = $request->top;
        $remark = $request->remark;
        $request = array(
            "nama"=>$nama,
            "alamat1"=>$alamat1,
            "alamat2"=>$alamat2,
            "alamat3"=>$alamat3,
            "kota"=>$kota,
            "provinsi"=>$provinsi,
            "telepon1"=>$telepon1,
            "telepon2"=>$telepon2,
            "telepon3"=>$telepon3,
            "hp1"=>$hp1,
            "hp2"=>$hp2,
            "cp1"=>$cp1,
            "cp2"=>$cp2,
            "fax"=>$fax,
            "email"=>$email,
            "top"=>$top,
            "remark"=>$remark
        );
        $response = $this->cs->add($request);
        return redirect()->back()->with(['insert'=>$response]);
    }

    function deleteCustomer($id)
    {
        $response =  $this->cs->deleteCustomer($id);
        return redirect()->back()->with(['delete'=>$response]);
    }
}
