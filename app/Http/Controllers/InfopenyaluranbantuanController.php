<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Penyaluranbantuan;

class InfopenyaluranbantuanController extends Controller
{
    //
    function Datapenyaluranbantuan(){
        // mengambil data dari table tb_penyakit
        $datapenyaluranbantuan = DB::table('tb_penyaluran_bantuan as pb')
            ->join('tb_warga as w', 'w.nik', '=', 'pb.nik')
            ->join('tb_bantuan as b', 'b.id_bantuan', '=', 'pb.id_bantuan')
            // ->join('tb_lokasi as l', 'l.id_lokasi', '=', 'r.id_lokasi')
            ->get();
// dd($datakarantina);
    	// mengirim data penyakit ke view datapenyakit
    	return view('/penyaluranbantuan/datapenyaluranbantuan',['datapenyaluranbantuan' => $datapenyaluranbantuan]);
    }

    function viewtambahpenyaluranbantuan(){
        $getnik = DB::table('tb_warga as w')
        ->get();

        $getbantuan = DB::table('tb_bantuan as b')
        ->get();
        // memanggil view tambahpenyakit
        return view('/penyaluranbantuan/tambahpenyaluranbantuan',['getnik' => $getnik, 'getbantuan' => $getbantuan]);
    }

    function tambahpenyaluranbantuan(Request $request){
        $add = new Penyaluranbantuan;
        $add->nik = $request->input('nik');
        $add->id_bantuan = $request->input('id_bantuan');
        $add->jumlah = $request->input('jumlah');
        $add->save();
        
        return response()->json(array('status' => 'success', 'reason' => 'Sukses Tambah Data'));
    }

    // method untuk edit data penyakit
public function editpenyaluranbantuan($id_penyaluran_bantuan)
{
	// mengambil data penyakit berdasarkan id yang dipilih
	$penyaluranbantuan = DB::table('tb_penyaluran_bantuan')->where('id_penyaluran_bantuan',$id_penyaluran_bantuan)->get();
	// passing data penyakit yang didapat ke view edit.blade.php
	return view('/penyaluranbantuan/editpenyaluranbantuan',['datapenyaluranbantuan' => $penyaluranbantuan]);

}

// update data penyakit
public function updatepenyaluranbantuan(Request $request)
{
	// update data penyakit
	DB::table('tb_penyaluranbantuan')->where('id_penyaluran_bantuan',$request->id_penyaluran_bantuan)->update([
		'nik' => $request->nik,
        'nama' => $request->nama,
        'id_lokasi' => $request->id_lokasi,
		'latitude' => $request->latitude,
        'longitude' => $request->longitude,
        'id-penyakit' => $request->id_penyakit,
        'nama_penyakit' => $request->nama_penyakit,
        'tgl_input' => $request->tgl_input,
        'waktu_karantina' => $request->waktu_karantina,
    ]);

    return response()->json(array('status'=> 'success', 'reason' => 'Sukses Edit Data'));
    
}

public function deletepenyaluranbantuan($id_penyaluran_bantuan)
{
	// menghapus data penyakit berdasarkan id yang dipilih
	DB::table('tb_penyaluran_bantuan')->where('id_penyaluran_bantuan',$id_penyaluran_bantuan)->delete();
		
	return response()->json(array('status'=> 'success', 'reason' => 'Sukses Hapus Data'));
}

public function salurkanbantuan($id_penyaluran_bantuan)
{
    $penyaluranbantuan = DB::table('tb_penyaluran_bantuan')
    ->where('id_penyaluran_bantuan',$id_penyaluran_bantuan)->first();

    $bantuan = DB::table('tb_bantuan')
    ->where('id_bantuan',$penyaluranbantuan->id_bantuan)->first();

    if($penyaluranbantuan->jumlah > $bantuan->stok){
        return response()->json(array('status'=> 'error', 'reason' => 'Stok bantuan tidak cukup'));
    }

	// update bantuan
	DB::table('tb_bantuan')->where('id_bantuan',$penyaluranbantuan->id_penyaluran_bantuan)->update([
		'stok' =>( $bantuan->stok -  $penyaluranbantuan->jumlah),
    ]);

	// update penyaluranb bantuan
	DB::table('tb_penyaluran_bantuan')->where('id_penyaluran_bantuan',$id_penyaluran_bantuan)->update([
		'status' => 'sudah',
    ]);

    return response()->json(array('status'=> 'success', 'reason' => 'Sukses Edit Data'));
    
}

}
