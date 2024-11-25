<?php

use Illuminate\Support\Facades\Route;
/*use App\Http\Controllers\DosenController;*/

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

Route::get('/error', function () {
    return "<h1>Server Error : Ada kesalahan di server</h1>";
});

Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

Route::get('dosen', 'App\Http\Controllers\DosenController@index');
Route::get('blog2', 'App\Http\Controllers\DosenController@blog');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
//Route::get('/pegawai/{nama}', 'App\Http\Controllers\PegawaiController@index');
Route::get('/formulir', 'App\Http\Controllers\PegawaiController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\PegawaiController@proses');

Route::get('pertemuan1', 'App\Http\Controllers\TugasController@pertemuan1');
Route::get('pertemuan2', 'App\Http\Controllers\TugasController@pertemuan2');
Route::get('pertemuan3', 'App\Http\Controllers\TugasController@pertemuan3');
Route::get('pertemuan4', 'App\Http\Controllers\TugasController@pertemuan4');
Route::get('pertemuan5', 'App\Http\Controllers\TugasController@pertemuan5');
Route::get('pertemuan6', 'App\Http\Controllers\TugasController@pertemuan6');
Route::get('pertemuan7', 'App\Http\Controllers\TugasController@pertemuan7');

Route::get('/pegawai','App\Http\Controllers\PegawaiDBController@index'); //ganti semua route PegawaiDB
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiDBController@tambah'); //PR Tambahin edit save sama delete
Route::post('/pegawai/store','App\Http\Controllers\PegawaiDBController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiDBController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiDBController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiDBController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiDBController@cari');

