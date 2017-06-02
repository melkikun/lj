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
interface CustomerService {
    function add($request);
    
    function editCustomer($request);
    
    function deleteCustomer($id);
    
    function listCustomer();
}
