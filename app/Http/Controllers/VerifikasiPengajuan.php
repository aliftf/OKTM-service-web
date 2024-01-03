<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class VerifikasiPengajuan extends Controller
{
    /**
     * Display a listing of the resource.
     */

     //perlu di function index perlu tambahin parameter nim
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $nim)
    {
        //nim sekarang ubah dengan variable parameter
        $data = Form::where('nim', $nim)->first();
        $mhs = Mahasiswa::where('nim', $nim)->first();

        $ksm = @file_get_contents(storage_path("app/".$data->ksm));
        if ($ksm == false) {
            $ksm = null;
        }
        $bukti = @file_get_contents(storage_path("app/".$data->bukti_pembayaran));
        if ($bukti == false) {
            $bukti = null;
        }

        if($data->tipe == "Pengajuan Penggantian KTM"){
            $bihead = "Surat Kehilangan";
            $statusbihead = $data->status_surat_kehilangan;
            $bikomen = $data->komen_surat_kehilangan;
            $bifile = @file_get_contents(storage_path("app/".$data->surat_kehilangan));
            if ($bifile == false) {
                $bifile = null;
            }
        }else{
            $bihead = "KTM";
            $statusbihead = $data->status_ktm;
            $bikomen = $data->komen_ktm;
            $bifile = @file_get_contents(storage_path("app/".$data->ktm));
            if ($bifile == false) {
                $bifile = null;
            }
        }
        
        return view("verifikasiPengajuanKtm",[
            'form' => $data,
            'mhs' => $mhs,
            'bihead'=> $bihead,
            'biStat' => $statusbihead,
            'bikomen'=>$bikomen,
            'bifile'=>$bifile,
            'bukti'=>$bukti,
            'ksm'=>$ksm
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nim)
    {
        $form = Form::where('nim', $nim)->first();

        //Bagian komen
        $form->komen_ksm = $request->input('noteksm');
        $form->komen_bukti_pembayaran = $request->input('notebukti');
        if($form->tipe=="Pengajuan Penggantian KTM"){
            $form->komen_surat_kehilangan = $request->input('binote');
        }else{
            $form->komen_ktm = $request->input('binote');
        }
        
        //Bagian status document
        $status_ksm = $request->input('ksmpersetujuan');
        $status_bukti = $request->input('persetujuanbukti');
        $status_kehilangan = 0;
        $status_ktm = 0;

        $form->status_ksm = $status_ksm;
        $form->status_bukti_pembayaran = $status_bukti;

        if($form->tipe=="Pengajuan Penggantian KTM"){
            $status_kehilangan = $request->input('bistatus');
            $form->status_surat_kehilangan = $status_kehilangan;
        }else{
            $status_ktm = $request->input('bistatus');
            $form->status_ktm = $status_ktm;
        }

        //bagian status permintaan
        if($form->tipe == 'Pengajuan Penggantian KTM'){
            $form->status = "Permintaan Ditolak";
            if($status_ksm == 1 && $status_bukti == 1 && $status_kehilangan == 1){
                $form->status = "Permintaan Diproses";
            }
        }else{
            $form->status = "Permintaan Ditolak";
            if($status_ksm == 1 && $status_bukti == 1 && $status_ktm == 1){
                $form->status = "Permintaan Diproses";
            }
        }
        
        //Update Data
        $form->save();
        return redirect('/penerimaan-pengajuan-ktm');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
