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
        //nim sekarang ubah dengan variable parameter
        $data = Form::where('nim', 1302213011)->first();
        $mhs = Mahasiswa::where('nim', 1302213011)->first();
        $bihead = "KTM";
        $statusbihead = $data->status_ktm;
        $bikomen = $data->komen_ktm;
        if($data->tipe == "penggantian"){
            $bihead = "Surat Kehilangan";
            $statusbihead = $data->status_surat_kehilangan;
            $bikomen = $data->komen_surat_kehilangan;
        }
        return view("verifikasiPengajuanKtm",['form' => $data, 'mhs' => $mhs, 'bihead'=> $bihead, 'biStat' => $statusbihead, 'bikomen'=>$bikomen]);
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nim)
    {
        $form = Form::where('nim', $nim)->first();

        //bagian komen
        $form->komen_ksm = $request->input('noteksm');
        $form->komen_bukti_pembayaran = $request->input('notebukti');
        if($form->tipe=="penggantian"){
            $form->komen_surat_kehilangan = $request->input('binote');
        }else{
            $form->komen_ktm = $request->input('binote');
        }
        
        
        //bagian status
        $form->status_ksm = $request->input('ksmpersetujuan');
        $form->status_bukti_pembayaran = $request->input('persetujuanbukti');

        if($form->tipe=="penggantian"){
            $form->status_surat_kehilangan = $request->input('bistatus');
        }else{
            $form->status_ktm = $request->input('bistatus');
        }
        
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

    public function toggleStatus(){
        
    }
}
