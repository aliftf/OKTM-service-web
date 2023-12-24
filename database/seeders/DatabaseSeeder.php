<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Account;
use App\Models\Form;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Staff;
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
        //     'nim' => '0000000000',
        //     'acc_id' => 1,
        //     'nama' => 'Mahasiswa',
        //     'prodi' => 'Dump',
        //     'tahun' => 2021,
        // ]);

        Staff::create([
            "nip"=> "11111111111111",
            "nama"=> "alif",
            "jabatan"=> "staff",
        ]);

        // Form::create([
        //     'nim' => '1302213011',
        //     'tipe' => 'perbaikan',
        //     'status' => 'belum selesai',
        //     'komen_surat_kehilangan' => '',
        //     'komen_ktm' => '',
        //     'komen_ksm' => '',
        //     'ksm' => file_get_contents("C:\Users\ASUS\OneDrive\Pictures\Screenshot\Screenshot 2023-11-04 144208.png"),
        //     'bukti_pembayaran' => file_get_contents("public\images\home-1.jpg"),
        //     'ktm' => file_get_contents("C:\Users\ASUS\OneDrive\Pictures\Screenshot\Screenshot 2023-11-04 144208.png"),
        //     'surat_kehilangan' => ''
        // ]);

    }
}
