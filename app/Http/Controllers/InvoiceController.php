<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    //
    function __construct($foo = null)
    {
    	$this->foo = $foo;
    }

    public function addInvoice()
    {
    	# code...
        $current = "TAMBAH INVOICE";
    	return view('pages.invoice.add_invoice', compact('current'));
    }
}
