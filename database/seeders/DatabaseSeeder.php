<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Account;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Account::create([
            'username' => 'alif',
            'password' => Hash::make('123'),
            'role' => 'mahasiswa',
        ]);

        Mahasiswa::create([
            'nim' => '1302213011',
            'acc_id' => 1,
            'nama' => 'Alif Taufiqurrahman',
            'prodi' => 'S1 Rekayasa Perangkat Lunak',
            'tahun' => 2013,
        ]);
    }
}
