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
Route::get('tambahwarga','DatawargaController@tambahwarga');
Route::get('editwarga/{nik}','DatawargaController@editwarga');
Route::post('updatewarga','DatawargaController@updatewarga');

Route::get('infopenyakit', 'InfopenyakitController@infopenyakit');

Route::get('infobantuan', 'InfobantuanController@infobantuan');

Route::get('keluhan', 'KeluhanController@keluhan');

Route::get('anyar', 'AnyarController@anyar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
