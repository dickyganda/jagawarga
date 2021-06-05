<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Riwayat;

use DB;

class MapController extends Controller
{

    public function mapmobileindex()
    {

        $datariwayat = DB::select("

        SELECT 
            l.latitude, 
            l.longitude, 
            w.no_kk, 
            CONCAT_WS(\":\", w.nama, sub.penyakit) value 
        FROM 
            tb_lokasi l 
            JOIN tb_warga w ON w.no_kk = l.no_kk 
            LEFT JOIN tb_riwayat r ON r.nik = w.nik 
            LEFT JOIN (
            select 
                w.nik nik, 
                GROUP_CONCAT(p.nama_penyakit SEPARATOR ',') penyakit 
            from 
                tb_warga w 
                join tb_riwayat r ON w.nik = r.nik 
                join tb_penyakit p ON p.id_penyakit = r.id_penyakit 
            group by 
                w.nik 
            order by 
                w.nik
            ) sub ON sub.nik = w.nik 
        group by 
            w.nik, w.no_kk, l.latitude, l.longitude, w.nama, sub.penyakit
        order by 
            l.id_lokasi, 
            w.nama, 
            sub.penyakit
        ");

        return view('mapmobile', ['datariwayat' => $datariwayat]);
    }

    public function index()
    {

        $datariwayat = DB::select("

        SELECT 
            l.latitude, 
            l.longitude, 
            w.no_kk, 
            CONCAT_WS(\":\", w.nama, sub.penyakit) value 
        FROM 
            tb_lokasi l 
            JOIN tb_warga w ON w.no_kk = l.no_kk 
            LEFT JOIN tb_riwayat r ON r.nik = w.nik 
            LEFT JOIN (
            select 
                w.nik nik, 
                GROUP_CONCAT(p.nama_penyakit SEPARATOR ',') penyakit 
            from 
                tb_warga w 
                join tb_riwayat r ON w.nik = r.nik 
                join tb_penyakit p ON p.id_penyakit = r.id_penyakit 
            group by 
                w.nik 
            order by 
                w.nik
            ) sub ON sub.nik = w.nik 
        group by 
            w.nik, w.no_kk, l.latitude, l.longitude, w.nama, sub.penyakit
        order by 
            l.id_lokasi, 
            w.nama, 
            sub.penyakit
        ");

        return view('map', ['datariwayat' => $datariwayat]);
    }

    public function Getdatamap()
    {

        $datariwayat = DB::select("

        SELECT 
            l.latitude, 
            l.longitude, 
            w.no_kk, 
            CONCAT_WS(\":\", w.nama, sub.penyakit) value 
        FROM 
            tb_lokasi l 
            JOIN tb_warga w ON w.no_kk = l.no_kk 
            LEFT JOIN tb_riwayat r ON r.nik = w.nik 
            LEFT JOIN (
            select 
                w.nik nik, 
                GROUP_CONCAT(p.nama_penyakit SEPARATOR ',') penyakit 
            from 
                tb_warga w 
                join tb_riwayat r ON w.nik = r.nik 
                join tb_penyakit p ON p.id_penyakit = r.id_penyakit 
            group by 
                w.nik 
            order by 
                w.nik
            ) sub ON sub.nik = w.nik 
        group by 
            w.nik, w.no_kk, l.latitude, l.longitude, w.nama, sub.penyakit
        order by 
            l.id_lokasi, 
            w.nama, 
            sub.penyakit
        ");

        return view('map', ['datariwayat' => $datariwayat]);
    }

    public function Getalldata(){

        $datakarantina = DB::table('tb_warga as w')
            ->select('*', DB::raw('IF(id_karantina is null, "Sehat", "Sakit") status_sehat'))
            ->leftJoin('tb_karantina as k', 'w.nik', '=', 'k.nik')
            ->leftJoin('tb_penyakit as p', 'k.id_penyakit', '=', 'p.id_penyakit')
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

            $row['nama'] = $datakarantina->nama;
            $row['nama_penyakit'] = $datakarantina->nama_penyakit;
            $row['waktu_karantina'] = $status;
            $row['status'] = $datakarantina->status_sehat;

            $response[] = $row;
        }

        return response()->json($response);
    }
}
