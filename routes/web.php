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
    return view('welcome');
});

Route::get('dashboard', 'JagawargaController@index');

Route::get('datawarga', 'DatawargaController@datawarga');

Route::get('infopenyakit', 'InfopenyakitController@infopenyakit');

Route::get('infobantuan', 'InfobantuanController@infobantuan');

Route::get('keluhan', 'KeluhanController@keluhan');
