<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function downloadFile($formId, $fileType)
    {
        $form = Form::where('id', $formId)->first();
        if ($form){
            switch ($fileType) {
                case 'ksm':
                    $file = 'public/file/ksm/' . $form->ksm;
                    return Storage::download($file);
                    break;
                case 'ktm':
                    $file = 'public/file/ktm/' . $form->ktm;
                    return Storage::download($file);
                    break;
                case 'surat-kehilangan':
                    $file = 'public/file/surat-kehilangan/' . $form->surat_kehilangan;
                    return Storage::download($file);
                    break;
                case 'bukti-pembayaran':
                    $file = 'public/file/bukti-pembayaran/' . $form->bukti_pembayaran;
                    return Storage::download($file);
                    break;
                default:
                    return response()->json(['error' => 'File not found.'], 404);
                    break;
            }

        }
        return response()->json(['error' => 'Data not found.'], 404);
    }
}
