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
Route::get('deletewarga/{id}','DatawargaController@deletewarga');

Route::get('datapenyakit', 'InfopenyakitController@datapenyakit');
Route::get('tambahpenyakit','InfopenyakitController@viewtambahpenyakit');
Route::post('tambahpenyakit','InfopenyakitController@tambahpenyakit');
Route::get('editpenyakit/{id_penyakit}','InfopenyakitController@editpenyakit');
Route::post('updatepenyakit','InfopenyakitController@updatepenyakit');
Route::get('deletepenyakit/{id_penyakit}','InfopenyakitController@deletepenyakit');

Route::get('databantuan', 'InfobantuanController@databantuan');
Route::get('editbantuan/{id_bantuan}','InfobantuanController@editbantuan');
Route::post('updatebantuan','InfobantuanController@updatebantuan');
Route::get('deletebantuan/{id_bantuan}','InfobantuanController@deletebantuan');

// Route::get('keluhan', 'KeluhanController@keluhan');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/map', 'MapController@index')->name('map');