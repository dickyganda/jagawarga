<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karantina extends Model
{
    
    protected $table = 'tb_karantina';
    public $timestamps = false;
    protected $primaryKey = 'id_karantina';
}