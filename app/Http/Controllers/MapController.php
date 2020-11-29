<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Riwayat;

use DB;

class MapController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $datariwayat = DB::table('tb_riwayat as r')
        //     ->join('tb_warga as w', 'w.nik', '=', 'r.nik')
        //     ->join('tb_penyakit as p', 'p.id_penyakit', '=', 'r.id_penyakit')
        //     ->join('tb_lokasi as l', 'l.id_lokasi', '=', 'r.id_lokasi')
        //     ->orderBy('l.id_lokasi', 'ASC')
        //     ->orderBy('w.nama', 'ASC')
        //     ->orderBy('p.nama_penyakit', 'ASC')
        //     ->get();

        $datariwayat = DB::select("

        SELECT

            latitude,
            longitude,

            concat(`nama`, ':', group_concat(`nama_penyakit` separator ',')) as value

        from (

            SELECT
                l.id_lokasi,
                latitude,
                longitude,
                nama,
                nama_penyakit
                
            FROM
                `tb_riwayat` AS `r`
            INNER JOIN `tb_warga` AS `w`
            ON
                `w`.`nik` = `r`.`nik`
            INNER JOIN `tb_penyakit` AS `p`
            ON
                `p`.`id_penyakit` = `r`.`id_penyakit`
            INNER JOIN `tb_lokasi` AS `l`
            ON
                `l`.`id_lokasi` = `r`.`id_lokasi`
            GROUP BY
                nama,
                l.id_lokasi,
                p.id_penyakit,
                latitude,
                longitude,
                nama_penyakit
            ORDER BY
                `l`.`id_lokasi` ASC,
                `w`.`nama` ASC,
                `p`.`nama_penyakit` ASC
                
        ) as subquery
                
        group by id_lokasi, latitude, longitude, nama
        
        ");

        // dd($datariwayat);

        return view('map', ['datariwayat' => $datariwayat]);
    }
}
