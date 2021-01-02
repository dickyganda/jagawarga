<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Karantina;
use App\Models\Riwayat;
use App\Models\Warga;
use App\Models\Penyakit;
use App\Models\Lokasi;

class InfokarantinaController extends Controller
{

    function Getdatakarantina(){
        // mengambil data dari table tb_penyakit
        $datakarantina = DB::table('tb_karantina as k')
            ->join('tb_warga as w', 'w.nik', '=', 'k.nik')
            ->join('tb_penyakit as p', 'p.id_penyakit', '=', 'k.id_penyakit')
            ->join('tb_lokasi as l', 'l.id_lokasi', '=', 'k.id_lokasi')
            ->get();
        $response = array();
        foreach($datakarantina as $datakarantina){
            $diff = date("Y-m-d", strtotime('+' . $datakarantina->waktu_karantina . "days", strtotime($datakarantina->tgl_input)));
            $diff = date_diff(date_create($diff), date_create(date("Y-m-d")));

            if($diff->format("%R") == '+'){ 
                $status = 'Selesai'; 
            }elseif($diff->format("%a") == '0'){ 
                $status = 'Selesai'; 
            }else{
                $status = $datakarantina->waktu_karantina." Hari";
            }

            $row['id_karantina'] = $datakarantina->id_karantina;
            $row['nama'] = $datakarantina->nama;
            $row['nama_penyakit'] = $datakarantina->nama_penyakit;
            $row['waktu_karantina'] = $status;

            $response[] = $row;
        }

    	return response()->json($response);
    }

    function Datakarantina(){
        // mengambil data dari table tb_penyakit
        $datakarantina = DB::table('tb_karantina as k')
            ->join('tb_warga as w', 'w.nik', '=', 'k.nik')
            ->join('tb_penyakit as p', 'p.id_penyakit', '=', 'k.id_penyakit')
            ->join('tb_lokasi as l', 'l.id_lokasi', '=', 'k.id_lokasi')
            ->get();

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

    $datakarantina = Karantina::find($id_karantina);
    $datawarga = Warga::find($datakarantina->nik);
    $datapenyakit = Penyakit::find($datakarantina->id_penyakit);
    $datalokasi = Lokasi::find($datakarantina->id_lokasi);

    $add = new Riwayat;
    $add->nik = $datawarga->nik;
    // $add->nama = $datawarga->nama;
    $add->id_penyakit = $datapenyakit->id_penyakit;
    $add->id_lokasi = $datalokasi->id_lokasi;
    // $add->latitude = $datalokasi->latitude;
    // $add->longitude = $datalokasi->longitude;
    // $add->tgl_input = Date('Y-m-d');
    $add->save();
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