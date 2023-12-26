<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Mahasiswa;

class FinalisasiRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $form = Form::latest('updated_at')->where('status','=','Permintaan Diproses')->with('mahasiswa');
        $forms = $form->paginate(5);
        return view('finalisasiPengajuan', ['result' => $forms]);
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
    public function update(Request $request, string $id)
    {
        $formUpdated = Form::find($id);
        $formUpdated->status = 'Selesai';
        $formUpdated->save();
        return redirect('/finalisasi-pengajuan-ktm');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
