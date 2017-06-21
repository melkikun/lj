<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Services;
use Illuminate\Database\Eloquent\Collection;
/**
 *
 * @author IT01
 */
interface TransportService {
    function add(array $request):int;
    
    function editTransport(int $id):int;
    
    function deleteTransport(int $id):int;
    
    function listTransport():Collection;

    function hello(int $a):?int;
}
