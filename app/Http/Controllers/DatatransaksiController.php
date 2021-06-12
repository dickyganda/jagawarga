<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Transaksi_Bantuan;

class DatatransaksiController extends Controller
{
    function Datatransaksi(){
        
    	$datatransaksi = DB::table('tb_transaksi_bantuan')->get();
 
    	// mengirim data penyakit ke view datapenyakit
    	return view('/transaksi/datatransaksi',['datatransaksi' => $datatransaksi]);
	}
}