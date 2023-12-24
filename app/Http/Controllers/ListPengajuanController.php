<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class ListPengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $mahasiswas = Mahasiswa::all();
        $formsQuery = Form::latest('updated_at')->with('mahasiswa');

        $searchQuery = $request->input('search');

        if ($searchQuery) {
            $formsQuery->where(function ($query) use ($searchQuery) {
                $query->where('nim', 'like', "%$searchQuery%")
                      ->orWhere('tipe', 'like', "%$searchQuery%")
                      ->orWhere('status', 'like', "%$searchQuery%")
                      ->orWhereRaw('MONTHNAME(tanggal) LIKE ?', ["%$searchQuery%"])
                      ->orWhereHas('mahasiswa', function ($query) use ($searchQuery) {
                          $query->where('nama', 'like', "%$searchQuery%")
                                ->orWhere('prodi', 'like', "%$searchQuery%")
                                ->orWhere('tahun', 'like', "%$searchQuery%");
                      });
            });
        }

        $selectedStatus = $request->input('status', 'Filter Status');
        $selectedType = $request->input('tipe', 'Filter Tipe');

        if ($selectedStatus != 'Filter Status' && $selectedType != 'Filter Tipe') {
            $formsQuery->where(function ($query) use ($selectedStatus, $selectedType) {
                $query->where('status', $selectedStatus)
                      ->where('tipe', $selectedType);
            });
        } elseif ($selectedStatus != 'Filter Status') {
            $formsQuery->where('status', $selectedStatus);
        } elseif ($selectedType != 'Filter Tipe') {
            $formsQuery->where('tipe', $selectedType);
        }

        $forms = $formsQuery->paginate(5)->withQueryString();

        $formattedForms = $forms->map(function ($form) {
            $form->formatted_tanggal = Carbon::parse($form->tanggal)->translatedFormat('j F Y');
            return $form;
        });

        return view('list-pengajuan-ktm', [
            'mahasiswas' => $mahasiswas,
            'forms' => $formattedForms,
            'status' => $selectedStatus,
            'tipe' => $selectedType,
        ])->with('forms', $forms);
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
            'addKSM' => 'required|mimes:jpg,jpeg,png,webp,pdf|max:5000',
            'addKTM' => 'mimes:jpg,jpeg,png,webp,pdf|max:5000',
            'addSurat' => 'mimes:jpg,jpeg,png,webp,pdf|max:5000',
            'addBukti' => 'required|mimes:jpg,jpeg,png,webp,pdf|max:5000',
        ], [], [
            'addNIM' => 'NIM',
            'addNama' => 'Nama',
            'addProdi' => 'Prodi',
            'addTahun' => 'Tahun',
            'addTipe' => 'Tipe',
            'addStatus' => 'Status',
            'addTanggal' => 'Tanggal',
            'addKSM' => 'KSM',
            'addKTM' => 'KTM',
            'addSurat' => 'Surat Kehilangan',
            'addBukti' => 'Bukti Pembayaran',
        ]);

        $fileNameKSM = null;
        $fileNameKTM = null;
        $fileNameSurat = null;
        $fileNameBukti = null;

        if ($request->file('addKSM')) {
            $fileKSM = $request->file('addKSM');
            $fileNameKSM = pathinfo($fileKSM->getClientOriginalName(), PATHINFO_FILENAME) . '-' . $validatedData['addNIM'] . '.' . $fileKSM->extension();
            Storage::put('public/file/ksm/' . $fileNameKSM, file_get_contents($fileKSM));
        }

        if ($request->file('addKTM')) {
            $fileKTM = $request->file('addKTM');
            $fileNameKTM = pathinfo($fileKTM->getClientOriginalName(), PATHINFO_FILENAME) . '-' . $validatedData['addNIM'] . '.' . $fileKTM->extension();
            Storage::put('public/file/ktm/' . $fileNameKTM, file_get_contents($fileKTM));
        }

        if ($request->file('addSurat')) {
            $fileSurat = $request->file('addSurat');
            $fileNameSurat = pathinfo($fileSurat->getClientOriginalName(), PATHINFO_FILENAME) . '-' . $validatedData['addNIM'] . '.' . $fileSurat->extension();
            Storage::put('public/file/surat-kehilangan/' . $fileNameSurat, file_get_contents($fileSurat));
        }

        if ($request->file('addBukti')) {
            $fileBukti = $request->file('addBukti');
            $fileNameBukti = pathinfo($fileBukti->getClientOriginalName(), PATHINFO_FILENAME) . '-' . $validatedData['addNIM'] . '.' . $fileBukti->extension();
            Storage::put('public/file/bukti-pembayaran/' . $fileNameBukti, file_get_contents($fileBukti));
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

        $tanggal_format = Carbon::parse($form->tanggal)->translatedFormat('j F Y');

        if ($form){
            return response()->json([
                'nim' => $form->nim,
                'nama' => $form->mahasiswa->nama,
                'prodi' => $form->mahasiswa->prodi,
                'tahun' => $form->mahasiswa->tahun,
                'tipe' => $form->tipe,
                'status' => $form->status,
                'tanggal' => $form->tanggal,
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
        $form = Form::where('id', $id)->first();

        $tanggal_format = Carbon::parse($form->tanggal)->translatedFormat('j F Y');

        if ($form){
            return response()->json([
                'nim' => $form->nim,
                'nama' => $form->mahasiswa->nama,
                'prodi' => $form->mahasiswa->prodi,
                'tahun' => $form->mahasiswa->tahun,
                'tipe' => $form->tipe,
                'status' => $form->status,
                'tanggal' => $form->tanggal,
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
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mahasiswa = Mahasiswa::where('nim', $request->editNIM)->first();
        $form = Form::where('id', $id)->with('mahasiswa')->first();
        $filePath = 'public/file/';

        $validatedData = $request->validate([
            'editNIM' => 'required|digits:10|numeric',
            'editNama' => 'required|max:50',
            'editTipe' => 'required',
            'editStatus' => 'required',
            'editTanggal' => 'required',
            'editKSM' => 'mimes:jpg,jpeg,png,webp,pdf|max:5000',
            'editKTM' => 'mimes:jpg,jpeg,png,webp,pdf|max:5000',
            'editSurat' => 'mimes:jpg,jpeg,png,webp,pdf|max:5000',
            'editBukti' => 'mimes:jpg,jpeg,png,webp,pdf|max:5000',
        ],[], [
            'editNIM' => 'NIM',
            'editNama' => 'Nama',
            'editTipe' => 'Tipe',
            'editStatus' => 'Status',
            'editTanggal' => 'Tanggal',
            'editKSM' => 'KSM',
            'editKTM' => 'KTM',
            'editSurat' => 'Surat',
            'editBukti' => 'Bukti',
        ]);

        $fileNameKSM = $form->ksm;
        $fileNameKTM = $form->ktm;
        $fileNameSurat = $form->surat_kehilangan;
        $fileNameBukti = $form->bukti_pembayaran;

        if ( $request->editNIM != $form->nim && !$mahasiswa)
        {
            Mahasiswa::create([
                'nim' => $validatedData['editNIM'],
                'nama' => $validatedData['editNama'],
                'prodi' => $form->mahasiswa->prodi,
                'tahun' => $form->mahasiswa->tahun,
            ]);
        }

        if ($request->editTipe == 'Pengajuan Penggantian KTM' && ($form->tipe == 'Pengajuan Perbaikan KTM' || $form->tipe == 'Pengajuan KTM Masih Bermasalah'))
        {
            Storage::delete($filePath . 'ktm/' . $form->ktm);
            $fileNameKTM = null;
        } elseif (($request->editTipe == 'Pengajuan Perbaikan KTM' || $request->editTipe == 'Pengajuan KTM Masih Bermasalah') && $form->tipe == 'Pengajuan Penggantian KTM')
        {
            Storage::delete($filePath . 'surat-kehilangan/' . $form->surat_kehilangan);
            $fileNameSurat = null;
        }

        if ($request->file('editKSM')) {
            Storage::delete($filePath . 'ksm/' . $form->ksm);

            $fileKSM = $request->file('editKSM');
            $fileNameKSM = pathinfo($fileKSM->getClientOriginalName(), PATHINFO_FILENAME) . '-' . $validatedData['editNIM'] . '.' . $fileKSM->extension();
            Storage::put('public/file/ksm/' . $fileNameKSM, file_get_contents($fileKSM));
        }

        if ($request->file('editKTM')) {
            Storage::delete($filePath . 'ksm/' . $form->ktm);

            $fileKTM = $request->file('editKTM');
            $fileNameKTM = pathinfo($fileKTM->getClientOriginalName(), PATHINFO_FILENAME) . '-' . $validatedData['editNIM'] . '.' . $fileKTM->extension();
            Storage::put('public/file/ktm/' . $fileNameKTM, file_get_contents($fileKTM));
        }

        if ($request->file('editSurat')) {
            Storage::delete($filePath . 'surat-kehilangan/' . $form->surat_kehilangan);

            $fileSurat = $request->file('editSurat');
            $fileNameSurat = pathinfo($fileSurat->getClientOriginalName(), PATHINFO_FILENAME) . '-' . $validatedData['editNIM'] . '.' . $fileSurat->extension();
            Storage::put('public/file/surat-kehilangan/' . $fileNameSurat, file_get_contents($fileSurat));
        }

        if ($request->file('editBukti')) {
            Storage::delete($filePath . 'bukti-pembayaran/' . $form->bukti_pembayaran);

            $fileBukti = $request->file('editBukti');
            $fileNameBukti = pathinfo($fileBukti->getClientOriginalName(), PATHINFO_FILENAME) . '-' . $validatedData['editNIM'] . '.' . $fileBukti->extension();
            Storage::put('public/file/bukti-pembayaran/' . $fileNameBukti, file_get_contents($fileBukti));
        }

        Mahasiswa::where('nim', $form->nim)->update([
            'nim' => $validatedData['editNIM'],
            'nama' => $validatedData['editNama'],
        ]);

        Form::where('id', $id)->update([
            'nim' => $validatedData['editNIM'],
            'tipe' => $validatedData['editTipe'],
            'status' => $validatedData['editStatus'],
            'tanggal' => $validatedData['editTanggal'],
            'ksm' => $fileNameKSM,
            'ktm' => $fileNameKTM,
            'surat_kehilangan' => $fileNameSurat,
            'bukti_pembayaran' => $fileNameBukti,
        ]);

        return redirect('/list-pengajuan-ktm')->with('success', "Pengajuan KTM NIM $validatedData[editNIM] berhasil diubah.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $form = Form::where('id', $id)->firstOrFail();
        $nim = $form->nim;
        $filePath = 'public/file/';

        if($form->tipe == 'Pengajuan Penggantian KTM')
        {
            $ksmFilePath = $filePath . 'ksm/' . $form->ksm;
            $suratFilePath = $filePath . 'surat-kehilangan/' . $form->surat_kehilangan;
            $buktiFilePath = $filePath . 'bukti-pembayaran/' . $form->bukti_pembayaran;

            if (Storage::exists($ksmFilePath) && Storage::exists($suratFilePath) && Storage::exists($buktiFilePath))
            {
                Storage::delete($ksmFilePath);
                Storage::delete($suratFilePath);
                Storage::delete($buktiFilePath);
            }
        } elseif ($form->tipe == 'Pengajuan Perbaikan KTM' || $form->tipe == 'Pengajuan KTM Masih Bermasalah')
        {
            $ksmFilePath = $filePath . 'ksm/' . $form->ksm;
            $ktmFilePath = $filePath . 'ktm/' . $form->ktm;
            $buktiFilePath = $filePath . 'bukti-pembayaran/' . $form->bukti_pembayaran;

            if (Storage::exists($ksmFilePath) && Storage::exists($ktmFilePath) && Storage::exists($buktiFilePath))
            {
                Storage::delete($ksmFilePath);
                Storage::delete($ktmFilePath);
                Storage::delete($buktiFilePath);
            }
        }

        Form::where('id', $id)->delete();
        return redirect()->back()->with('success', "Pengajuan KTM NIM $nim berhasil dihapus.");
    }
}
