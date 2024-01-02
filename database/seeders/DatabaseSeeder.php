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
        Account::create([
            'username' => 'mahasiswa',
            'password' => Hash::make('mahasiswa'),
            'role' => 'mahasiswa',
        ]);

        Account::create([
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'role' => 'admin',
        ]);

        Mahasiswa::create([
            'nim' => '1111111111',
            'acc_id' => 1,
            'nama' => 'Mahasiswa',
            'prodi' => 'Dump',
            'tahun' => 2021,
        ]);
    }
}
 