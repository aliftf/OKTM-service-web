<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class HasilController extends Controller
{
    public function index(Request $request){
        $forms = Form::where('nim', auth()->user()->mahasiswa->nim)->latest('updated_at')->with('mahasiswa');

        $tipe = $request->input('tipe', 'Filter Tipe');

        $status = $request->input('status', 'Filter Status');

        if ($status != 'Filter Status') {
            $forms->where('status', $status);
        } elseif ($tipe != 'Filter Tipe') {
            $forms->where('tipe', $tipe);
        }

        $forms = $forms->paginate(2)->withQueryString();

        return view('informasi-hasil', [
            'forms' => $forms,
            'tipe' => $tipe,
            'status' => $status
        ]);
    }
}
