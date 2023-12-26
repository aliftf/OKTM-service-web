<?php

namespace Database\Factories;

use App\Models\Form;
use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Form>
 */
class FormFactory extends Factory
{
    protected $model = Form::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nim = $this->faker->randomElement(Mahasiswa::pluck('nim')->toArray());

        return [
            'nim' => $nim,
            'tipe' => $this->faker->randomElement(['Pengajuan Penggantian KTM', 'Pengajuan Perbaikan KTM', 'Pengajuan KTM Masih Bermasalah']),
            'status' => $this->faker->randomElement(['Menunggu Permintaan Disetujui', 'Permintaan Diproses', 'Permintaan Tidak Disetujui', 'Selesai']),
            'tanggal' => $this->faker->date(),

            'komen_ksm' => $this->faker->sentence(3),
            'komen_bukti_pembayaran' => $this->faker->sentence(3),
            'komen_ktm' => $this->faker->sentence(3),
            'komen_surat_kehilangan' => $this->faker->sentence(3),

            // 'ksm' => $this->faker->randomElement(['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg']),
            // 'ktm' => $this->faker->randomElement(['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg']),
            // 'surat_kehilangan' => $this->faker->randomElement(['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg']),
            // 'bukti_pembayaran' => $this->faker->randomElement(['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg']),
            // 'komentar'=>$this->faker->sentence()
        ];
    }
}
