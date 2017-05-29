<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warna;
use App\User;
use App\Barang;
class FrontController extends Controller
{
	private $request;
	private $warna;
	private $user;
	private $barang;

	public function __construct(Request $request, User $user, Warna $warna, Barang $barang)
	{
		$this->request = $request;
		$this->warna = $warna;
		$this->user = $user;
		$this->barang =$barang;
	}

	public function index(){
		return view('pages.login.login');
	}

	public function addBarang(){
		return view('barang.add');
	}

	public function warna(){
		echo $this->warna->where('nm_warna', '-')->get();
	}

	public function barang(){
		echo $this->barang->setName("miko");
		echo $this->barang->getName();
		return view('barang.add');
	}

	public function loginx(){
		$username = $this->request->input("username");
		$password = $this->request->input("password");
		echo "$username";
	}
}
