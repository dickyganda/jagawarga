<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatawargaController extends Controller
{
    //
function Datawarga(){
        // mengambil data dari table tb_warga
    	$datawarga = DB::table('tb_warga')->get();
 
    	// mengirim data warga ke view datawarga
    	return view('datawarga',['datawarga' => $datawarga]);
    }

    // method untuk menampilkan view form tambah data warga
function tambahwarga(){

	// memanggil view tambah warga
	return view('tambahwarga');
}

// method untuk edit data warga
public function editwarga($id)
{
	// mengambil data warga berdasarkan id yang dipilih
	$warga = DB::table('tb_warga')->where('nik',$id)->get();
	// passing data warga yang didapat ke view edit.blade.php
	return view('editwarga',['datawarga' => $warga]);

}

// update data warga
public function updatewarga(Request $request)
{
	// update data warga
	DB::table('tb_warga')->where('nik',$request->id)->update([
		'nik' => $request->nik,
		'no_kk' => $request->no_kk,
		'nama' => $request->nama,
        'ttl' => $request->ttl,
        'jk' => $request->jk,
        'lokasi' => $request->lokasi,
        'riwayat' => $request->riwayat,
        'waktu_karantina' => $request->waktu_karantina
	]);
	// alihkan halaman ke halaman datawarga
	return redirect('/datawarga');
}

// method untuk hapus data warga
public function hapus($id)
{
	// menghapus data warga berdasarkan id yang dipilih
	DB::table('tb_warga')->where('nik',$id)->delete();
		
	// alihkan halaman ke halaman datawarga
	return redirect('/datawarga');
}

}
