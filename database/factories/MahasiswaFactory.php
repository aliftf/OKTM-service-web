<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    protected $model = Mahasiswa::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        $randomInt = $this->faker->unique()->randomNumber(4);
        $nim = '130221' . str_pad($randomInt, 4, '0', STR_PAD_LEFT);

        return [
            'nim' => $nim,
            'nama' => $this->faker->name(),
            'prodi' => $this->faker->randomElement(['S1 Informatika', 'S1 Rekayasa Perangkat Lunak', 'S1 Data Sains', 'S1 Sistem Informasi', 'S1 Teknologi Informasi']),
            'tahun' => $this->faker->randomElement([2019, 2020, 2021, 2022, 2023]),
        ];
    }
}
