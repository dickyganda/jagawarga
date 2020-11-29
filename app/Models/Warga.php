<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    
    protected $table = 'tb_warga';
    public $timestamps = false;
    protected $primaryKey = 'nik';
    protected $fillable = ['nik','no_kk','nama','ttl','jk'];
}