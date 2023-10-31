<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/pengajuan-ktm-bermasalah', function () {
    return view('pengajuanBermasalah');
});

Route::get('/pengajuan-penggantian-ktm', function(){
    return view('pengajuanPenggantian');
});

Route::get('/list-pengajuan-ktm', function () {
    return view('list-pengajuan-ktm');
});

Route::get('/verifikasi-pengajuan-ktm', function () {
    return view('verifikasiPengajuanKtm');
});

Route::get('/pengajuan-perbaikan-ktm', function () {
    return view('pengajuan-perbaikan-ktm');
});

Route::get('/pengajuan-ktm', function () {
    return view('pengajuanKTM');
});

Route::get('/penerimaan-pengajuan-ktm', function () {
    return view('penerimaanPengajuanKtm');
});

Route::get('/informasi-hasil', function () {
    return view('informasi-hasil');
});