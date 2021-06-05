<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if (Auth::check()){
        return redirect('/dashboard');
    }
    else{
    return redirect('/login');
    }
});

Route::get('dashboard', 'JagawargaController@index');

Route::get('datawarga', 'DatawargaController@datawarga');
Route::get('tambahwarga','DatawargaController@viewtambahwarga');
Route::post('tambahwarga','DatawargaController@tambahwarga');
Route::get('editwarga/{nik}','DatawargaController@editwarga');
Route::post('updatewarga','DatawargaController@updatewarga');
Route::get('deletewarga/{nik}','DatawargaController@deletewarga');
Route::post('getwarga','DatawargaController@getwarga');
Route::post('import_excel', 'DatawargaController@import_excel');

Route::get('datapenyakit', 'InfopenyakitController@datapenyakit');
Route::get('tambahpenyakit','InfopenyakitController@viewtambahpenyakit');
Route::post('tambahpenyakit','InfopenyakitController@tambahpenyakit');
Route::get('editpenyakit/{id_penyakit}','InfopenyakitController@editpenyakit');
Route::post('updatepenyakit','InfopenyakitController@updatepenyakit');
Route::get('deletepenyakit/{id_penyakit}','InfopenyakitController@deletepenyakit');
Route::post('getpenyakit','InfopenyakitController@getpenyakit');

Route::get('databantuan', 'InfobantuanController@databantuan');
Route::get('editbantuan/{id_bantuan}','InfobantuanController@editbantuan');
Route::post('updatebantuan','InfobantuanController@updatebantuan');
Route::get('deletebantuan/{id_bantuan}','InfobantuanController@deletebantuan');

Route::get('datalokasi', 'InfolokasiController@datalokasi');
Route::get('tambahlokasi','InfolokasiController@viewtambahlokasi');
Route::post('tambahlokasi','InfolokasiController@tambahlokasi');
Route::get('editlokasi/{id_lokasi}','InfolokasiController@editlokasi');
Route::post('updatelokasi','InfolokasiController@updatelokasi');
Route::get('deletelokasi/{id_lokasi}','InfolokasiController@deletelokasi');

Route::get('datakarantina', 'InfokarantinaController@datakarantina');
Route::get('tambahkarantina','InfokarantinaController@viewtambahkarantina');
Route::post('tambahkarantina','InfokarantinaController@tambahkarantina');
Route::get('editkarantina/{id_karantina}','InfokarantinaController@editkarantina');
Route::post('updatekarantina','InfokarantinaController@updatekarantina');
Route::get('deletekarantina/{id_karantina}','InfokarantinaController@deletekarantina');
Route::get('tambahwaktukarantina/{id_karantina}','InfokarantinaController@tambahwaktukarantina');

Route::get('datariwayat', 'InforiwayatController@datariwayat');
Route::get('tambahriwayat','InforiwayatController@viewtambahriwayat');
Route::post('tambahriwayat','InforiwayatController@tambahriwayat');
Route::get('editriwayat/{id_riwayat}','InforiwayatController@editriwayat');
Route::post('updateriwayat','InforiwayatController@updateriwayat');
Route::get('deleteriwayat/{id_riwayat}','InforiwayatController@deleteriwayat');

Route::get('datapenyaluranbantuan', 'InfopenyaluranbantuanController@datapenyaluranbantuan');
Route::get('tambahpenyaluranbantuan','InfopenyaluranbantuanController@viewtambahpenyaluranbantuan');
Route::post('tambahpenyaluranbantuan','InfopenyaluranbantuanController@tambahpenyaluranbantuan');
Route::get('editpenyaluranbantuan/{id_penyaluran_bantuan}','InfopenyaluranbantuanController@editpenyaluranbantuan');
Route::post('updatepenyaluranbantuan','InfopenyaluranbantuanController@updatepnyaluranbantuan');
Route::get('deletepenyaluranbantuan/{id_penyaluran_bantuan}','InfopenyaluranbantuanController@deletepenyaluranbantuan');
Route::get('salurkanbantuan/{id_penyaluran_bantuan}','InfopenyaluranbantuanController@salurkanbantuan');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/map', 'MapController@index')->name('map');
Route::get('/mapmobile', 'MapController@mapmobileindex')->name('mapmobile');
Route::get('alldata', 'MapController@Getalldata');
