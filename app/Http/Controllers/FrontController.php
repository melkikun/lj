<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    private $request;
    public function __construct(Request $request)
    {
    	$this->request = $request;
    }

    public function login(){
    	return view('login');
    }
}
