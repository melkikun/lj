<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transportasi extends Model
{
    //
    protected $table = "lj_mst_transport";
    public $primaryKey = "transport_id";
    public $timestamps = false;
    
}
