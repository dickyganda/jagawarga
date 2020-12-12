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
                'kasusaktif_monthly' => $kasusaktif_monthly
            ]
        );
    }
}
