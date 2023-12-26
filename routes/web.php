<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\ListPengajuanController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PenerimaanPengajuanController;
use App\Http\Controllers\VerifikasiPengajuan;

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

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index']);

    Route::post('/login', [AuthController::class, 'authenticate'])->name('login');
});


Route::resource('/verifikasi-pengajuan-ktm', VerifikasiPengajuan::class);

Route::middleware('admin')->group(function () {
    Route::resource('/list-pengajuan-ktm', ListPengajuanController::class)->name('index','list-pengajuan-ktm');

    Route::get('/list-pengajuan-ktm/download/{formId}/{fileType}', [DownloadController::class, 'downloadFile']);

    Route::get('/verifikasi-pengajuan-ktm', function () {
        return view('verifikasiPengajuanKtm');
    });
    
    Route::get('/penerimaan-pengajuan-ktm',
        [PenerimaanPengajuanController::class,'index']
    );

    Route::get('/finalisasi-pengajuan-ktm', function () {
        return view('finalisasiPengajuan');
    });
});

Route::middleware('mahasiswa')->group(function() {
    Route::get('/pengajuan-ktm-bermasalah', function () {
        return view('pengajuanBermasalah');
    });
    
    Route::get('/pengajuan-penggantian-ktm', function(){
        return view('pengajuanPenggantian');
    });

    Route::get('/pengajuan-perbaikan-ktm', function () {
        return view('pengajuan-perbaikan-ktm');
    });
    
    Route::get('/pengajuan-ktm', function () {
        return view('pengajuanKTM');
    });
    
    Route::get('/informasi-hasil', [HasilController::class, 'index'])->name('informasi-hasil');

    Route::resource('/form', FormController::class);
});
