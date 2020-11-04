<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    
    protected $table = 'tb_lokasi';
    public $timestamps = false;
    protected $primaryKey = 'id_lokasi';
}