<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Bantuan;

class InfobantuanController extends Controller
{
    function Databantuan(){
        // mengambil data dari table tb_penyakit
    	$databantuan = DB::table('tb_bantuan')->get();
 
    	// mengirim data penyakit ke view datapenyakit
    	return view('/bantuan/databantuan',['databantuan' => $databantuan]);
    }

    public function editbantuan($id_bantuan)
{
	// mengambil data penyakit berdasarkan id yang dipilih
	$bantuan = DB::table('tb_bantuan')->where('id_bantuan',$id_bantuan)->get();
	// passing data penyakit yang didapat ke view edit.blade.php
	return view('/bantuan/editbantuan',['databantuan' => $bantuan]);

}

public function updatebantuan(Request $request)
{
	// update data penyakit
	DB::table('tb_bantuan')->where('id_bantuan',$request->id_bantuan)->update([
		'bantuan' => $request->bantuan,
	]);

    return response()->json(array('status'=> 'success', 'reason' => 'Sukses Edit Data'));
    
}

public function deletebantuan($id_bantuan)
{
	// menghapus data penyakit berdasarkan id yang dipilih
	DB::table('tb_bantuan')->where('id_bantuan',$id_bantuan)->delete();
		
	return response()->json(array('status'=> 'success', 'reason' => 'Sukses Hapus Data'));
}
}