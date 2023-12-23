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
    public function index()
    {
        //
        $data = Form::where('nim', 1302213011)->first();
        $mhs = Mahasiswa::where('nim', 1302213011)->first();
        $bihead = "KTM";
        if($data->tipe == "penggantian"){
            $bihead = "Surat Kehilangan";
        }
        return view("verifikasiPengajuanKtm",['form' => $data, 'mhs' => $mhs, 'bihead'=> $bihead]);
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
        //
        $form = Form::where('nim', $nim)->first();
        $form->komen_ksm = $request->input('noteksm');
        //untuk komen_bukti
        $form->komen_bukti_pembayaran = $request->input('notebukti');
        
        if($form->tipe=="penggantian"){
            $form->komen_surat_kehilangan = $request->input('binote');
        }else{
            $form->komen_ktm = $request->input('binote');
        }
        $form->status_ksm = $request->input('persetujuanKSM');

        if($form->tipe=="penggantian"){
            $form->status_surat_kehilangan = $request->input('bistatus');
        }else{
            $form->status_ktm = $request->input('bistatus');
        }
        
        $form->status_bukti_pembayaran = $request->input('persetujuanbukti');

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
