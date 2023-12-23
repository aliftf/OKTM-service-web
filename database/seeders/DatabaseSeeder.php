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
        //     'username' => 'alif',
        //     'password' => Hash::make('123'),
        //     'role' => 'mahasiswa',
        // ]);

        // Mahasiswa::create([
        //     'nim' => '1302213011',
        //     'acc_id' => 1,
        //     'nama' => 'Alif Taufiqurrahman',
        //     'prodi' => 'S1 Rekayasa Perangkat Lunak',
        //     'tahun' => 2021,
        // ]);

        Form::create([
            'nim' => '1302213011',
            'tipe' => 'perbaikan',
            'status' => 'belum selesai',
            'komen_surat_kehilangan' => '',
            'komen_ktm' => '',
            'komen_ksm' => '',
            'ksm' => file_get_contents("C:\Users\ASUS\Downloads\CONTOH USECASE SCENARIO.pdf"),
            'bukti_pembayaran' => file_get_contents("public\images\home-1.jpg"),
            'ktm' => file_get_contents("C:\Users\ASUS\OneDrive\Pictures\Screenshot\Screenshot 2023-11-04 144208.png"),
            'surat_kehilangan' => ''
        ]);
    }
}
