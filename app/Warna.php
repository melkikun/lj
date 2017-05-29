<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warna extends Model
{
    protected $table = "lj_warna";
    protected $primaryKey = "nm_warna";
    public $incrementing = false;
}
