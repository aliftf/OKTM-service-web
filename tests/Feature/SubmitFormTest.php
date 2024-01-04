<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Models\Form;


class SubmitFormTest extends TestCase
{
    public function test_submit_form_penggantian()
    {
        Storage::fake('public'); // Mocking storage
        
        // Mocking file uploads
        $ksmFile = UploadedFile::fake()->create('sample_ksm.pdf');
        $suratKehilanganFile = UploadedFile::fake()->create('surat_kehilangan.pdf');
        $ktmFile = UploadedFile::fake()->create('ktm.pdf');
        $buktiPembayaranFile = UploadedFile::fake()->create('bukti_pembayaran.pdf');
        
        // Setting $tipe to "Pengajuan Penggantian KTM"
        $data = [
            'tipe' => 'Pengajuan Penggantian KTM',
            'ksm' => $ksmFile,
            'surat_kehilangan' => $suratKehilanganFile,
            'ktm' => $ktmFile,
            'bukti_pembayaran' => $buktiPembayaranFile,
        ];
        
        $response = $this->post('/form', $data);
        
        $form = Form::latest()->first(); // Fetching the created form
        
        if ($form->tipe == 'Pengajuan Penggantian KTM') {
            $this->assertNotEmpty($form->surat_kehilangan); // Asserting that $path_ktm is not empty
        }
    }

    public function test_submit_form_nonpenggantian()
    {
        Storage::fake('public'); // Mocking storage
        
        // Mocking file uploads
        $ksmFile = UploadedFile::fake()->create('sample_ksm.pdf');
        $suratKehilanganFile = UploadedFile::fake()->create('surat_kehilangan.pdf');
        $ktmFile = UploadedFile::fake()->create('ktm.pdf');
        $buktiPembayaranFile = UploadedFile::fake()->create('bukti_pembayaran.pdf');
        
        // Setting $tipe to "Pengajuan Penggantian KTM"
        $data = [
            'tipe' => 'Pengajuan perbaikan KTM',
            'ksm' => $ksmFile,
            'surat_kehilangan' => $suratKehilanganFile,
            'ktm' => $ktmFile,
            'bukti_pembayaran' => $buktiPembayaranFile,
        ];
        
        $this->post('/form', $data);
        
        $form = Form::latest()->first(); // Fetching the created form
        
        if ($form->tipe == 'Pengajuan Penggantian KTM') {
            $this->assertEmpty($form->surat_kehilangan); // Asserting that $path_ktm is not empty
        }
    }
}
