<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{

    //
    public function store(Request $request)
    {
        $latestId = Form::latest('id')->first()->id + 1;

        $tipe = $request->input('tipe');
        
        $ksmfile = $request->file('ksm');
        $path_ksm = 'public/file/ksm/' . pathinfo($ksmfile->getClientOriginalName(), PATHINFO_FILENAME) . '-' . auth()->user()->mahasiswa->nim . '-' . $latestId . '.' . $ksmfile->extension();
        Storage::put($path_ksm, file_get_contents($ksmfile));
        
        $path_surat_kehilangan = "";
        if ( $tipe ==  "Pengajuan Penggantian KTM"){
            $surat_kehilanganFile = $request->file('surat_kehilangan');
            $path_surat_kehilangan = 'public/file/surat-kehilangan/' . pathinfo($surat_kehilanganFile->getClientOriginalName(), PATHINFO_FILENAME) . '-' . auth()->user()->mahasiswa->nim . '-' . $latestId . '.' . $surat_kehilanganFile->extension();
            Storage::put($path_surat_kehilangan, file_get_contents($surat_kehilanganFile));
        }
        
        $path_ktm = "";
        if ( $tipe !=  "Pengajuan Penggantian KTM"){
            $ktmFile = $request->file('ktm');
            $path_ktm = 'public/file/ktm/' . pathinfo($ktmFile->getClientOriginalName(), PATHINFO_FILENAME) . '-' . auth()->user()->mahasiswa->nim . '-' . $latestId . '.' . $ktmFile->extension();
            Storage::put($path_ktm, file_get_contents($ktmFile));
        }
        
        $bukti_pembayaranFile = $request->file('bukti_pembayaran');
        $path_bukti_pembayaran = 'public/file/bukti-pembayaran/' . pathinfo($bukti_pembayaranFile->getClientOriginalName(), PATHINFO_FILENAME) . '-' . auth()->user()->mahasiswa->nim . '-' . $latestId . '.' . $bukti_pembayaranFile->extension();
        Storage::put($path_bukti_pembayaran, file_get_contents($bukti_pembayaranFile));
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
