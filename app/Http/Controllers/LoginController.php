<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Warga;

class LoginController extends Controller
{
    //
function Login(Request $request){
        // mengambil data dari table tb_warga
        $warga = DB::table('tb_warga')
        ->where('nik','=', $request->input('nik'))
        ->where('nama','=', $request->input('nama'))
        ->first();

        $response = array();
        if($warga){
            $response['status'] = 'success';
            $response['data'] = $warga;
        }else{
            $response['status'] = 'failed';


        }
 
    	// mengirim data warga ke view datawarga
    	return response()->json(['response'=>$response]);
    }
}