<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Transaksi_Bantuan;

class DatatransaksiController extends Controller
{
    function Datatransaksi(){
        
    	$datatransaksi = DB::table('tb_transaksi_bantuan as t')
		->join('tb_warga as w', 'w.nik', '=', 't.nik')
		->join('tb_bantuan as b', 'b.id_bantuan', '=', 't.id_bantuan')
		->get();
 
    	// mengirim data penyakit ke view datapenyakit
    	return view('/transaksi/datatransaksi',['datatransaksi' => $datatransaksi]);
	}
}