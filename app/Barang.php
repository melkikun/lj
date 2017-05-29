<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = "lj_mst_inv";
    public $primaryKey = "inv_id";
   	public $timestamps = false;

}
