<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Services\Impl;
use App\Customer;
use DB;
use Auth;
/**
 * Description of CustomerServiceImpl
 *
 * @author IT01
 */
class CustomerServiceImpl implements \App\Http\Services\CustomerService{
    private $customer;
    function __construct(Customer $customer) {
        $this->customer = $customer;
    }

    //put your code here
    public function add($request) {
        $sequence = DB::getSequence();
        $this->customer->cust_id = $sequence->nextValue('mst_cust_id_seq');
        $this->customer->cust_nm = $request['nama'];
        $this->customer->CUST_ADDR1 = $request['alamat1'];
        $this->customer->CUST_CITY = $request['kota'];
        $this->customer->CUST_PROVINCE = $request['provinsi'];
        $this->customer->CUST_COUNTRY = "INDONESIA";
        $this->customer->CUST_POSTAL_CODE = 0;
        $this->customer->CUST_TELEPHONE1 = $request['telepon1'];
        $this->customer->CUST_TELEPHONE2 = $request['telepon2'];
        $this->customer->CUST_FAX = $request['fax'];
        $this->customer->CUST_EMAIL = $request['email'];
        $this->customer->CUST_PERSON1 = $request['cp1'];
        $this->customer->CUST_PERSON2 = $request['cp2'];
        $this->customer->CUST_SIGN = Auth::user()->user_id;
        $this->customer->CUST_MISC_INFO = $request['remark'];
        $this->customer->CUST_TERM_PAY = $request['top'];
        $this->customer->CUST_PHONE1 = $request['hp1'];
        $this->customer->CUST_PHONE2 = $request['hp2'];
        $this->customer->CUST_ADDR2 = $request['alamat2'];
        $this->customer->CUST_ADDR3 = $request['alamat3'];
        $this->customer->CUST_TELEPHONE3 = $request['telepon3'];
        $save = $this->customer->save();
        return $save;
    }

    public function deleteCustomer($id) {
        $customer = $this->customer->find($id);
        $customer->isactive = 0;
        $update = $customer->save();
        return $update;
    }

    public function editCustomer($request) {
        
    }

    public function listCustomer() {
        $customer = $this->customer->where('isactive', '1')->get();
        return $customer;
    }

}
