<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function downloadFile($formId, $fileType)
    {
        $form = Form::where('id', $formId)->first();
        if ($form){
            switch ($fileType) {
                case 'ksm':
                    $file = public_path('file/ksm/' . $form->ksm);
                    return response()->download($file);
                    break;
                case 'ktm':
                    $file = public_path('file/ktm/' . $form->ktm);
                    return response()->download($file);
                    break;
                case 'surat-kehilangan':
                    $file = public_path('file/surat-kehilangan/' . $form->surat_kehilangan);
                    return response()->download($file);
                    break;
                case 'bukti-pembayaran':
                    $file = public_path('file/bukti-pembayaran
                    /' . $form->bukti_pembayaran);
                    return response()->download($file);
                    break;
                default:
                    return response()->json(['error' => 'File not found.'], 404);
                    break;
            }

        }
        return response()->json(['error' => 'Data not found.'], 404);
    }
}
