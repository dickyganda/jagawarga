<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Bantuan;
use App\Models\Warga;
use App\Models\Transaksi_Bantuan;

class InfobantuanController extends Controller
{
    function Databantuan(){
        // mengambil data dari table tb_penyakit
    	$databantuan = DB::table('tb_bantuan')->get();
 
    	// mengirim data penyakit ke view datapenyakit
    	return view('/bantuan/databantuan',['databantuan' => $databantuan]);
	}
	
	function tambahbantuan(Request $request){

		//cari existing bantuan
		$result = Bantuan::where("jenis_bantuan", "=", strtoupper($request->input('jenis_bantuan')))->first();
		
		//cari existing warga
		$warga = Warga::where("nik", "=", strtoupper($request->input('nik')))->first();

		$id_bantuan = null;

		//jika ada, tambah stok
		if(!empty($result)){

			DB::table('tb_bantuan')->where('id_bantuan',$result->id_bantuan)->update([
				'stok' => $result->stok+$request->stok,
				'satuan' => $request->satuan,
			]);
		
			$id_bantuan = $result->id_bantuan;
		}
		else{
			$add = new Bantuan;
			$add->jenis_bantuan = strtoupper($request->input('jenis_bantuan'));
			$add->stok = $request->input('stok');
			$add->satuan = $request->input('satuan');
			$add->save();

			$id_bantuan = $add->id;
		}

		//add transaksi
		$add = new Transaksi_Bantuan;
		$add->nik = strtoupper($request->input('nik'));
		$add->id_bantuan = $id_bantuan;
		$add->jumlah = $request->input('stok');
		$add->tgl_transaksi = date('Y-m-d');
		$add->save();
		
		return response()->json(array('status' => 'success', 'reason' => 'Sukses Tambah Data'));
	}

    public function editbantuan($id_bantuan)
{
	
	$bantuan = DB::table('tb_bantuan')->where('id_bantuan',$id_bantuan)->get();
	
	return view('/bantuan/editbantuan',['databantuan' => $bantuan]);

}

public function updatebantuan(Request $request)
{
	// update data penyakit
	DB::table('tb_bantuan')->where('id_bantuan',$request->id_bantuan)->update([
		'jenis_bantuan' => $request->jenis_bantuan,
		'stok' => $request->stok,
		'satuan' => $request->satuan,
	]);

    return response()->json(array('status'=> 'success', 'reason' => 'Sukses Edit Data'));
    
}

public function deletebantuan($id_bantuan)
{
	// menghapus data penyakit berdasarkan id yang dipilih
	DB::table('tb_bantuan')->where('id_bantuan',$id_bantuan)->delete();
		
	return response()->json(array('status'=> 'success', 'reason' => 'Sukses Hapus Data'));
}
}