<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warga;
use App\Models\Penyakit;

class JagawargaController extends Controller
{
    //
    function Index(){ 

        // $data = Warga::select('*')->where('lokasi', '=', 'waruwetan')
        // ->get();
        // // dd($data);

        return view('dashboard');
    }
}
