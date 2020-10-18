<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Warga;

class DatawargaController extends Controller
{
    //
function Datawarga(){
        // mengambil data dari table tb_warga
    	$datawarga = DB::table('tb_warga')->get();
 
    	// mengirim data warga ke view datawarga
    	return view('/warga/datawarga',['datawarga' => $datawarga]);
    }

    // method untuk menampilkan view form tambah data warga
function viewtambahwarga(){

	// memanggil view tambah warga
	return view('/warga/tambahwarga');
}

function tambahwarga(Request $request){
	$add = new Warga;
	$add->nik = $request->input('nik');
	$add->no_kk = $request->input('no_kk');
	$add->nama = $request->input('nama');
	$add->ttl = $request->input('ttl');
	$add->jk = $request->input('jk');
	$add->latitude = $request->input('latitude');
	$add->longitude = $request->input('longitude');
	$add->riwayat = $request->input('riwayat');
	$add->waktu_karantina = $request->input('waktu_karantina');
	$add->save();
	
	return response()->json(array('status' => 'success', 'reason' => 'Sukses Tambah Data'));
}

// method untuk edit data warga
public function editwarga($id)
{
	// mengambil data warga berdasarkan id yang dipilih
	$warga = DB::table('tb_warga')->where('nik',$id)->get();
	// passing data warga yang didapat ke view edit.blade.php
	return view('/warga/editwarga',['datawarga' => $warga]);

}

// update data warga
public function updatewarga(Request $request)
{
	// update data warga
	DB::table('tb_warga')->where('id',$request->id)->update([
		'nik' => $request->nik,
		'no_kk' => $request->no_kk,
		'nama' => $request->nama,
        'ttl' => $request->ttl,
        'jk' => $request->jk,
		'latitude' => $request->latitude,
		'longitude' => $request->longitude,
        'riwayat' => $request->riwayat,
        'waktu_karantina' => $request->waktu_karantina
	]);

	return response()->json(array('status'=> 'success', 'reason' => 'Sukses Edit Data'));
}

// method untuk hapus data warga
public function deletewarga($id)
{
	// menghapus data warga berdasarkan id yang dipilih
	DB::table('tb_warga')->where('id',$id)->delete();
		
	return response()->json(array('status'=> 'success', 'reason' => 'Sukses Hapus Data'));
}

}
