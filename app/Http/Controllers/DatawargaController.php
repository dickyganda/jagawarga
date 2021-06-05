<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Imports\WargaImport;
use Maatwebsite\Excel\Facades\Excel;
use Session;

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
	$add->save();
	
	return response()->json(array('status' => 'success', 'reason' => 'Sukses Tambah Data'));
}

// method untuk edit data warga
public function editwarga($nik)
{
	// mengambil data warga berdasarkan id yang dipilih
	$warga = DB::table('tb_warga')->where('nik',$nik)->get();
	// passing data warga yang didapat ke view edit.blade.php
	return view('/warga/editwarga',['datawarga' => $warga]);

}

// update data warga
public function updatewarga(Request $request)
{
	// update data penyakit
	DB::table('tb_warga')->where('nik',$request->nik)->update([
		'no_kk' => $request->no_kk,
		'nama' => $request->nama,
		'ttl' => $request->ttl,
		'jk' => $request->jk,
	]);

    return response()->json(array('status'=> 'success', 'reason' => 'Sukses Edit Data'));
    
}

// method untuk hapus data warga
public function deletewarga($nik)
{
	// menghapus data warga berdasarkan id yang dipilih
	DB::table('tb_warga')->where('nik',$nik)->delete();
		
	return response()->json(array('status'=> 'success', 'reason' => 'Sukses Hapus Data'));
}

public function getwarga(Request $request)
{
	// menghapus data warga berdasarkan id yang dipilih
	// Warga::where('nik',$request->input('nik'))->first();
	$getwarga = DB::table('tb_warga as w')
	->join('tb_lokasi as l', 'l.no_kk','=', 'w.no_kk');

	if(!empty($request->input('nik'))){
		$getwarga = $getwarga->where('nik', $request->input('nik'));
	}
	else if(!empty( $request->input('nama'))){
		$getwarga = $getwarga->where('nama', $request->input('nama'));
	}

	$getwarga = $getwarga->first();
		
	return response()->json($getwarga);
}

public function import_excel(Request $request) 
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('file_siswa',$nama_file);
 
		// import data
		Excel::import(new WargaImport, public_path('/file_siswa/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data Siswa Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect('/datawarga');
	}

}
