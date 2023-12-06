<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ListPengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        $forms = Form::latest('updated_at')->with('mahasiswa')->get();

        $formattedForms = $forms->map(function ($form) {
            $form->formatted_updated_at = Carbon::parse($form->updated_at)->translatedFormat('j F Y');
            return $form;
        });

        return view('list-pengajuan-ktm', [
            'mahasiswas' => $mahasiswas,
            'forms' => $formattedForms,
        ]);
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
        $validatedData = $request->validate([
            'addNIM' => 'required|digits:10|numeric',
            'addNama' => 'required|max:50',
            'addProdi' => 'required',
            'addTahun' => 'required|digits:4|numeric',
            'addTipe' => 'required',
            'addStatus' => 'required',
            'addTanggal' => 'required',
            'addKSM' => 'required|mimes:jpg,png|max:5000',
            'addKTM' => 'mimes:jpg,png|max:5000',
            'addSurat' => 'mimes:jpg,png|max:5000',
            'addBukti' => 'required|mimes:jpg,png|max:5000',
        ], [
            'addNama.max' => 'Panjang maksimum untuk Nama adalah :max karakter.',
            'addKSM.max' => 'Ukuran maksimum untuk KSM adalah 5MB.',
            'addKTM.max' => 'Ukuran maksimum untuk KTM adalah 5MB.',
            'addSurat.max' => 'Ukuran maksimum untuk Surat adalah 5MB.',
            'addBukti.max' => 'Ukuran maksimum untuk Bukti adalah 5MB.',
        ]);
    
        $fileNameKSM = '';
        $fileNameKTM = '';
        $fileNameSurat = '';
        $fileNameBukti = '';

        if ($request->file('addKSM')) {
            $fileKSM = $request->file('addKSM');
            $fileNameKSM = pathinfo($fileKSM->getClientOriginalName(), PATHINFO_FILENAME) . '-' . $validatedData['addNIM'] . '.' . $fileKSM->extension();
            $fileKSM->move(public_path('file/ksm'), $fileNameKSM);
        }
    
        if ($request->file('addKTM')) {
            $fileKTM = $request->file('addKTM');
            $fileNameKTM = pathinfo($fileKTM->getClientOriginalName(), PATHINFO_FILENAME) . '-' . $validatedData['addNIM'] . '.' . $fileKTM->extension();
            $fileKTM->move(public_path('file/ktm'), $fileNameKTM);
        }
    
        if ($request->file('addSurat')) {
            $fileSurat = $request->file('addSurat');
            $fileNameSurat = pathinfo($fileSurat->getClientOriginalName(), PATHINFO_FILENAME) . '-' . $validatedData['addNIM'] . '.' . $fileSurat->extension();
            $fileSurat->move(public_path('file/surat-kehilangan'), $fileNameSurat);
        }
    
        if ($request->file('addBukti')) {
            $fileBukti = $request->file('addBukti');
            $fileNameBukti = pathinfo($fileBukti->getClientOriginalName(), PATHINFO_FILENAME) . '-' . $validatedData['addNIM'] . '.' . $fileBukti->extension();
            $fileBukti->move(public_path('file/bukti-pembayaran'), $fileNameBukti);
        }

        $mahasiswa = Mahasiswa::where('nim', $validatedData['addNIM'])->first();

        if(!$mahasiswa){
            Mahasiswa::create([
                'nim' => $validatedData['addNIM'],
                'nama' => $validatedData['addNama'],
                'prodi' => $validatedData['addProdi'],
                'tahun' => $validatedData['addTahun'],
            ]);
        }

        Form::create([
            'nim' => $validatedData['addNIM'],
            'tipe' => $validatedData['addTipe'],
            'status' => $validatedData['addStatus'],
            'tanggal' => $validatedData['addTanggal'],
            'ksm' => $fileNameKSM,
            'ktm' => $fileNameKTM,
            'surat_kehilangan' => $fileNameSurat,
            'bukti_pembayaran' => $fileNameBukti,
        ]);
        
        $nim = $request->input('addNIM');
        return redirect('/list-pengajuan-ktm')->with('success', "Pengajuan KTM NIM $nim berhasil ditambahkan.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $form = Form::where('id', $id)->first();

        $tanggal_format = Carbon::parse($form->updated_at)->translatedFormat('j F Y');

        if ($form){
            return response()->json([
                'nim' => $form->nim,
                'nama' => $form->mahasiswa->nama,
                'prodi' => $form->mahasiswa->prodi,
                'tahun' => $form->mahasiswa->tahun,
                'tipe' => $form->tipe,
                'status' => $form->status,
                'tanggal' => $form->updated_at,
                'tanggal_format' => $tanggal_format,
                'ksm' => $form->ksm,
                'ktm' => $form->ktm,
                'surat' => $form->surat_kehilangan,
                'bukti' => $form->bukti_pembayaran,
            ]);
        }

        return response()->json(['error' => 'Data not found.'], 404);
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
        $mahasiswas = Mahasiswa::all();
        $forms = Form::where('id', $id)->with('mahasiswa')->get();

        $rules = [
            'editNIM' => 'required|digits:10|numeric',
            'editNama' => 'required|max:50',
            'editTipe' => 'required',
            'editStatus' => 'required',
            'editTanggal' => 'required',
            'addKSM' => 'required|mimes:jpg,png|max:5000',
            'addKTM' => 'mimes:jpg,png|max:5000',
            'addSurat' => 'mimes:jpg,png|max:5000',
            'addBukti' => 'required|mimes:jpg,png|max:5000',
        ];

        $validatedData = $request->validate($rules, [
            'required' => ''
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
