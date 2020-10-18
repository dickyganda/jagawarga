<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    
    protected $table = 'tb_penyakit';
    public $timestamps = false;
    protected $primaryKey = 'id_penyakit';
}