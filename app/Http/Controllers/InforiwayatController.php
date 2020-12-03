<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Riwayat;

class InforiwayatController extends Controller
{
    //
    function Datariwayat(){
        // mengambil data dari table tb_penyakit
        $datariwayat = DB::table('tb_riwayat as r')
            ->join('tb_warga as w', 'w.nik', '=', 'r.nik')
            ->join('tb_penyakit as p', 'p.id_penyakit', '=', 'r.id_penyakit')
            ->join('tb_lokasi as l', 'l.id_lokasi', '=', 'r.id_lokasi')
            ->get();
// dd($datakarantina);
    	// mengirim data penyakit ke view datapenyakit
    	return view('/riwayat/datariwayat',['datariwayat' => $datariwayat]);
    }

    function viewtambahriwayat(){

        // memanggil view tambahpenyakit
        return view('/riwayat/tambahriwayat');
    }

    function tambahriwayat(Request $request){
        $add = new Karantina;
        $add->nik = $request->input('nik');
        $add->id_lokasi = $request->input('id_lokasi');
        $add->id_penyakit = $request->input('id_penyakit');
        $add->save();
        
        return response()->json(array('status' => 'success', 'reason' => 'Sukses Tambah Data'));
    }

    // method untuk edit data penyakit
public function editriwayat($id_riwayat)
{
	// mengambil data penyakit berdasarkan id yang dipilih
	$riwayat = DB::table('tb_riwayat')->where('id_riwayat',$id_riwayat)->get();
	// passing data penyakit yang didapat ke view edit.blade.php
	return view('/riwayat/editriwayat',['datariwayat' => $riwayat]);

}

// update data penyakit
public function updateriwayat(Request $request)
{
	// update data penyakit
	DB::table('tb_riwayat')->where('id_riwayat',$request->id_riwayat)->update([
		'nik' => $request->nik,
        'id_lokasi' => $request->id_lokasi,
		'id-penyakit' => $request->id_penyakit,
    ]);

    return response()->json(array('status'=> 'success', 'reason' => 'Sukses Edit Data'));
    
}

public function deleteriwayat($id_riwayat)
{
	// menghapus data penyakit berdasarkan id yang dipilih
	DB::table('tb_riwayat')->where('id_riwayat',$id_riwayat)->delete();
		
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
