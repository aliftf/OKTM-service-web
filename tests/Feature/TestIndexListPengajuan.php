<?php

namespace Tests\Feature;

use App\Models\Account;
use Tests\TestCase;
use App\Models\Form;
use App\Models\Mahasiswa;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TestIndexListPengajuan extends TestCase
{
    /**
     * A basic feature test example.
     */
    // public function test_example(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    public function testIndexWithSearch()
    {
        // Arrange - Prepare the data or set up necessary conditions
        $nim = 1302213011;

        $mahasiswa = Mahasiswa::firstOrNew(['nim' => $nim]);

        // If the Mahasiswa with the given NIM does not exist, set other attributes and save
        if (!$mahasiswa->exists) {
            $mahasiswa->nama = 'Alif Taufiqurrahman';
            $mahasiswa->prodi = 'S1 Rekayasa Perangkat Lunak';
            $mahasiswa->tahun = '2021';
            $mahasiswa->save();
        }

        $admin = Account::where('username', 'admin')->first();

        $this->actingAs($admin);

        $form = Form::firstOrNew(['nim' => $nim, 'tanggal' => '2021-05-01']);

        if (!$form->exists) {
            $form->tipe = 'KTM Masih Bermasalah';
            $form->status = 'Permintaan Diproses';
            $form->save();
        }

        // Act - Make a request to the controller's index method with a search query
        $response = $this->get('/list-pengajuan-ktm?search=1302213011'); // Replace with your actual route

        // Assert - Check the expected result
        $response->assertStatus(200)
                 ->assertSee($form->tipe)
                 ->assertSee($mahasiswa->nama);
    }

    public function testIndexWithFilters()
    {
        // Arrange - Prepare the data or set up necessary conditions
        $nim = 1302213011;

        $mahasiswa = Mahasiswa::firstOrNew(['nim' => $nim]);

        // If the Mahasiswa with the given NIM does not exist, set other attributes and save
        if (!$mahasiswa->exists) {
            $mahasiswa->nama = 'Alif Taufiqurrahman';
            $mahasiswa->prodi = 'S1 Rekayasa Perangkat Lunak';
            $mahasiswa->tahun = '2021';
            $mahasiswa->save();
        }

        $admin = Account::where('username', 'admin')->first();

        $this->actingAs($admin);

        $form = Form::firstOrNew(['nim' => $nim, 'tanggal' => '2021-05-01']);

        if (!$form->exists) {
            $form->tipe = 'KTM Masih Bermasalah';
            $form->status = 'Permintaan Diproses';
            $form->save();
        }

        // Act - Make a request to the controller's index method with filters
        $response = $this->get('/list-pengajuan-ktm?status=Permintaan Diproses&tipe=KTM Masih Bermasalah'); // Replace with your actual route

        // Assert - Check the expected result
        $response->assertStatus(200)
                 ->assertSee($form->tipe)
                 ->assertSee($mahasiswa->nama);
    }
}
