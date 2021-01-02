<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warga;
use App\Models\Penyakit;

use DB;

class JagawargaController extends Controller
{
    //
    function Index(){ 

        $jumlah_penduduk = Warga::selectRaw('count(*) as total')->first()->total;
        $jumlah_penyakit = Penyakit::selectRaw('count(*) as total')->first()->total;

        $jumlah_kasus_aktif = DB::select("
        
        SELECT count(*) total

        FROM tb_karantina k

        JOIN tb_penyakit p
            ON p.id_penyakit = k.id_penyakit
            
        WHERE DATE_ADD(tgl_input, INTERVAL waktu_karantina DAY) > CURDATE()
        
        ")[0]->total;

        // dd($data);

        $kasusaktif_monthly = array();
        $kasusaktif_monthly_query = DB::select("
        
        SELECT m.mon as bulan, COUNT(tgl_input) as total
        FROM (select 1 as mon union all select 2 union all select 3 union all select 4 union all
              select 5 union all select 6 union all select 7 union all select 8 union all
              select 9 union all select 10 union all select 11 union all select 12
             ) m left outer join
             tb_karantina
             on m.mon = month(tgl_input) and year(tgl_input) = 2020
        GROUP BY m.mon;
        
        ");
        foreach ($kasusaktif_monthly_query as $key) {
            $kasusaktif_monthly[($key->bulan)-1] = $key->total;
        }


        return view('dashboard', 
            [
                'jumlah_penduduk' => $jumlah_penduduk,
                'jumlah_penyakit' => $jumlah_penyakit,
                'jumlah_kasus_aktif' => $jumlah_kasus_aktif,
                'kasusaktif_monthly' => $kasusaktif_monthly
            ]
        );
    }

    function Jumlahpenyakit(){ 

        $jumlah_penyakit = Penyakit::selectRaw('count(*) as total')->first()->total;
        // dd($data);

        $total_penyakit = array();
        $total_penyakit_query = DB::select("
        
        SELECT m.mon as bulan, COUNT(jenis_penyakit) as total
        FROM (select 1 as mon union all select 2 union all select 3 union all select 4 union all
              select 5 union all select 6 union all select 7 union all select 8 union all
              select 9 union all select 10 union all select 11 union all select 12
             ) m left outer join
             tb_penyakit
             on m.mon = month(jenis_penyakit)
        GROUP BY m.mon;
        
        ");
        foreach ($total_penyakit_query as $key) {
            $total_penyakit[($key->bulan)-1] = $key->total;
        }


        return view('dashboard', 
            [
                'jumlah_penyakit' => $jumlah_penyakit,
                'total_penyakit' => $total_penyakit
            ]
        );
    }
}
