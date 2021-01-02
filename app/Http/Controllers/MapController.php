<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Riwayat;

use DB;

class MapController extends Controller
{

    public function index()
    {

        $datariwayat = DB::select("

            SELECT
                l.latitude, l.longitude,
                CONCAT_WS(\":\", w.nama, p.nama_penyakit) value
            
            FROM tb_lokasi l
            
            JOIN tb_warga w
                ON w.no_kk = l.no_kk
                
            LEFT JOIN tb_riwayat r
                ON r.nik = w.nik
                
            LEFT JOIN tb_penyakit p
                ON p.id_penyakit = r.id_penyakit
            
            order by l.id_lokasi, w.nama, p.nama_penyakit
        
        ");

        return view('map', ['datariwayat' => $datariwayat]);
    }

    public function Getdatamap()
    {

        $datariwayat = DB::select("

            SELECT
                l.latitude, l.longitude,
                CONCAT_WS(\":\", w.nama, p.nama_penyakit) value
            
            FROM tb_lokasi l
            
            JOIN tb_warga w
                ON w.no_kk = l.no_kk
                
            LEFT JOIN tb_riwayat r
                ON r.nik = w.nik
                
            LEFT JOIN tb_penyakit p
                ON p.id_penyakit = r.id_penyakit
            
            order by l.id_lokasi, w.nama, p.nama_penyakit
        
        ");

        return response()->json($datariwayat);
    }
}
