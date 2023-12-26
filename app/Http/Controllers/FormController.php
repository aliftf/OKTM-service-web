<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{

    //
    public function store(Request $request)
    {
        //
        $tipe = $request->input('tipe');
        $status = $request->input('status');
        $ktm = $request->input('ktm');
        $ksm = $request->input('ksm');
        $surat_kehilangan = $request->input('surat_kehilangan');
        $bukti_pembayaran = $request->input('bukti_pembayaran');
        
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
