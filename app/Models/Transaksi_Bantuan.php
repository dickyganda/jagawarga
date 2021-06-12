<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi_Bantuan extends Model
{
    
    protected $table = 'tb_transaksi_bantuan';
    public $timestamps = false;
    protected $primaryKey = 'id_transaksi';
}