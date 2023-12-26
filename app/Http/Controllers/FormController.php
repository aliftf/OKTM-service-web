<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{

    //
    public function store(Request $request)
    {
        $tipe = $request->input('tipe');
        
        $ksmfile = $request->file('ksm');
        $path_ksm = $ksmfile->store('storage\app\public');
        
        $path_surat_kehilangan = "";
        if ( $tipe ==  "Pengajuan Penggantian KTM"){
            $surat_kehilanganFile = $request->file('surat_kehilangan');
            $path_surat_kehilangan = $surat_kehilanganFile->store('storage\app\public');
        }
        
        $path_ktm = "";
        if ( $tipe !=  "Pengajuan Penggantian KTM"){
            $ktmFile = $request->file('ktm');
            $path_ktm = $ktmFile->store('storage\app\public');
        }
        
        $bukti_pembayaranFile = $request->file('bukti_pembayaran');
        $path_bukti_pembayaran = $bukti_pembayaranFile->store('storage\app\public');
        //
        $tipe = $request->input('tipe');
        $status = $request->input('status');
        $ktm = $path_ktm;
        $ksm = $path_ksm;
        $surat_kehilangan = $path_surat_kehilangan;
        $bukti_pembayaran = $path_bukti_pembayaran;
        
        // Using null coalescing operator to set default values as null if not provided
        $nim = auth()->user()->mahasiswa->nim;
        $tipe = $tipe ?? null;
        $status = "Menunggu Verifikasi";
        $ktm = $ktm ?? null;
        $ksm = $ksm ?? null;
        $surat_kehilangan = $surat_kehilangan ?? null;
        $bukti_pembayaran = $bukti_pembayaran ?? null;
        

        Form::create([
            'nim' => $nim,
            'tipe' => $tipe,
            'status' => $status,
            'tanggal' => now(),
            'ktm' => $ktm,
            'ksm' => $ksm,
            'surat_kehilangan' => $surat_kehilangan,
            'bukti_pembayaran' => $bukti_pembayaran,
            
        ]);
        return redirect('/');
    }
}
