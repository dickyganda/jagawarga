<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Karantina;

class InfokarantinaController extends Controller
{
    //
    function Datakarantina(){
        // mengambil data dari table tb_penyakit
        $datakarantina = DB::table('tb_karantina as k')
            ->join('tb_warga as w', 'w.nik', '=', 'k.nik')
            ->join('tb_penyakit as p', 'p.id_penyakit', '=', 'k.id_penyakit')
            ->join('tb_lokasi as l', 'l.id_lokasi', '=', 'k.id_lokasi')
            ->get();
// dd($datakarantina);
    	// mengirim data penyakit ke view datapenyakit
    	return view('/karantina/datakarantina',['datakarantina' => $datakarantina]);
    }

    function viewtambahkarantina(){
        $datawarga = DB::table('tb_warga as w')->get();
        $datapenyakit = DB::table('tb_penyakit')->get();
        $datalokasi = DB::table('tb_lokasi')->get();
        

        // memanggil view tambahpenyakit
        return view('/karantina/tambahkarantina', ['datawarga' => $datawarga, 'datapenyakit' => $datapenyakit, 'datalokasi' => $datalokasi]);
    }

    function tambahkarantina(Request $request){
        
        $add = new Karantina;
        $add->nik = $request->input('nik');
        $add->id_lokasi = $request->input('id_lokasi');
        $add->id_penyakit = $request->input('nama_penyakit');
        $add->tgl_input = Date('Y-m-d');
        $add->save();
        
        return response()->json(array('status' => 'success', 'reason' => 'Sukses Tambah Data'));
    }

    // method untuk edit data penyakit
public function editkarantina($id_karantina)
{
	// mengambil data penyakit berdasarkan id yang dipilih
	$karantina = DB::table('tb_karantina as k')
            ->join('tb_warga as w', 'w.nik', '=', 'k.nik')
            ->join('tb_penyakit as p', 'p.id_penyakit', '=', 'k.id_penyakit')
            ->join('tb_lokasi as l', 'l.id_lokasi', '=', 'k.id_lokasi')
            ->get();
	// passing data penyakit yang didapat ke view edit.blade.php
	return view('/karantina/editkarantina',['datakarantina' => $karantina]);

}

// update data penyakit
public function updatekarantina(Request $request)
{
	// update data penyakit
	DB::table('tb_karantina')->where('id_karantina',$request->id_karantina)->update([
		'nik' => $request->nik,
        'nama' => $request->nama,
        'latitude' => $request->latitude,
        'longitude' => $request->longitude,
        'nama_penyakit' => $request->nama_penyakit,
        'tgl_input' => $request->tgl_input,
        'waktu_karantina' => $request->waktu_karantina,
    ]);

    return response()->json(array('status'=> 'success', 'reason' => 'Sukses Edit Data'));
    
}

public function deletekarantina($id_karantina)
{
	// menghapus data penyakit berdasarkan id yang dipilih
	DB::table('tb_karantina')->where('id_karantina',$id_karantina)->delete();
		
	return response()->json(array('status'=> 'success', 'reason' => 'Sukses Hapus Data'));
}

public function tambahwaktukarantina($id_karantina)
{
    $jumlah_hari = Karantina::find($id_karantina);
    $jumlah_hari->tgl_input = date("Y-m-d");
    $jumlah_hari->save();

    return response()->json(array('status'=> 'success', 'reason' => 'Sukses Edit Data'));
    
}

}
