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
interface TransportService {
    function add($request);
    
    function editTransport($id);
    
    function deleteTransport($id);
    
    function listTransport();
}
