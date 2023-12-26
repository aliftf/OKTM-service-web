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
        $nim = $request->input('nim');
        $tipe = $request->input('tipe');
        $status = $request->input('status');
        $tanggal = $request->input('tanggal');
        $ktm = $request->input('ktm');
        $ksm = $request->input('ksm');
        $surat_kehilangan = $request->input('surat_kehilangan');
        $bukti_pembayaran = $request->input('bukti_pembayaran');
        $komentar = $request->input('komentar');

        // Using null coalescing operator to set default values as null if not provided
        $nim = $nim ?? null;
        $tipe = $tipe ?? null;
        $status = $status ?? null;
        $tanggal = $tanggal ?? null;
        $ktm = $ktm ?? null;
        $ksm = $ksm ?? null;
        $surat_kehilangan = $surat_kehilangan ?? null;
        $bukti_pembayaran = $bukti_pembayaran ?? null;
        $komentar = $komentar ?? null;

        Form::create([
            'nim' => $nim,
            'tipe' => $tipe,
            'status' => $status,
            'tanggal' => $tanggal,
            'ktm' => $ktm,
            'ksm' => $ksm,
            'surat_kehilangan' => $surat_kehilangan,
            'bukti_pembayaran' => $bukti_pembayaran,
            'komentar' => $komentar,
        ]);
        return redirect('/');
    }
}
