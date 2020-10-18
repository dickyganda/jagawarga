<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Penyakit;

class InfopenyakitController extends Controller
{
    //
    function Datapenyakit(){
        // mengambil data dari table tb_penyakit
    	$datapenyakit = DB::table('tb_penyakit')->get();
 
    	// mengirim data penyakit ke view datapenyakit
    	return view('/penyakit/datapenyakit',['datapenyakit' => $datapenyakit]);
    }

    function viewtambahpenyakit(){

        // memanggil view tambahpenyakit
        return view('/penyakit/tambahpenyakit');
    }

    function tambahpenyakit(Request $request){
        $add = new Penyakit;
        $add->nama_penyakit = $request->input('nama_penyakit');
        $add->gejala = $request->input('gejala');
        $add->waktu_karantina = $request->input('waktu_karantina');
        $add->penanganan_pertama = $request->input('penanganan_pertama');
        $add->save();
        
        return response()->json(array('status' => 'success', 'reason' => 'Sukses Tambah Data'));
    }

    // method untuk edit data penyakit
public function editpenyakit($id_penyakit)
{
	// mengambil data penyakit berdasarkan id yang dipilih
	$penyakit = DB::table('tb_penyakit')->where('id_penyakit',$id_penyakit)->get();
	// passing data penyakit yang didapat ke view edit.blade.php
	return view('/penyakit/editpenyakit',['datapenyakit' => $penyakit]);

}

// update data penyakit
public function updatepenyakit(Request $request)
{
	// update data penyakit
	DB::table('tb_penyakit')->where('id_penyakit',$request->id_penyakit)->update([
		'nama_penyakit' => $request->nama_penyakit,
		'gejala' => $request->gejala,
		'waktu_karantina' => $request->waktu_karantina,
        'penanganan_pertama' => $request->penanganan_pertama,
	]);

    return response()->json(array('status'=> 'success', 'reason' => 'Sukses Edit Data'));
    
}

public function deletepenyakit($id_penyakit)
{
	// menghapus data penyakit berdasarkan id yang dipilih
	DB::table('tb_penyakit')->where('id_penyakit',$id_penyakit)->delete();
		
	return response()->json(array('status'=> 'success', 'reason' => 'Sukses Hapus Data'));
}

}
