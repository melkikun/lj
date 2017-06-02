<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {

    protected $table = "lj_mst_cust";
    public $primaryKey = "cust_id";
    public $timestamps = false;

}
