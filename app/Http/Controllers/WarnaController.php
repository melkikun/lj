<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warna;
class WarnaController extends Controller
{
    function __construct(){
    }

    public function getWarna(){
    	$w = new Warna();
    	// echo $w->all();
    	return response()->json($w->select('nm_warna')->orderBy('nm_warna', 'asc')->get());
    }
}
