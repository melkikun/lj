<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Services;

/**
 *
 * @author IT01
 */
interface InvoiceService {
   function addInvoice($request);
   
   function editInvoice($request);
   
   function deleteInvoce($id);
   
   function listInvoice();
}
