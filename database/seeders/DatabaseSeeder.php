<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Account;
use App\Models\Form;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use function PHPSTORM_META\map;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Account::create([
        //     'username' => 'mahasiswa',
        //     'password' => Hash::make('mahasiswa'),
        //     'role' => 'mahasiswa',
        // ]);

        // Account::create([
        //     'username' => 'admin',
        //     'password' => Hash::make('admin'),
        //     'role' => 'admin',
        // ]);

        // Mahasiswa::create([
        //     'nim' => '1111111111',
        //     'acc_id' => 1,
        //     'nama' => 'Mahasiswa',
        //     'prodi' => 'Dump',
        //     'tahun' => 2021,
        // ]);

        Form::create([
            'nim' => '1111111111',
            'tipe' => 'perbaikan',
            'tanggal'=> '2023-12-02',
            'status' => 'belum selesai',
            'komen_surat_kehilangan' => '',
            'komen_ktm' => '',
            'komen_ksm' => '',
            'ksm' => "storage\app\public\file\ksm\Learning under concept drift.pdf",
            'bukti_pembayaran' => "storage\app\public\file\bukti-pembayaran\Screenshot 2023-11-04 144208.png",
            'ktm' => "storage\app\public\file\ktm\Screenshot 2023-11-04 144208.png",
            'surat_kehilangan' => ''
        ]);

    }
}
