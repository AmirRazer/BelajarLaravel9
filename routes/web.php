<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
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
Route::get('/welcome', function () {
    return '<h1> Semangat Belajar Laravel Framework</h1>';
});
Route::get('/pegawai/{nama}/{divisi}', function ($nama,$divisi) {
    return '<ol>
    <li>Nama : '.$nama.'</li>
    <li>Divisi : '.$divisi.'</li>
    </ol>';
});

Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/mahasiswa',[MahasiswaController::class,'dataMahasiswa']);
Route::get('/mahasiswa1',[MahasiswaController::class,'nilaiMahasiswa']);