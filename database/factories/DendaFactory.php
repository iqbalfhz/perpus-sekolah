<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Denda>
 */
class DendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'peminjaman_id' => \App\Models\Peminjaman::factory(),
            'anggota_id' => \App\Models\Anggota::factory(),
            'jenis_denda' => $this->faker->randomElement(['terlambat', 'hilang', 'rusak', 'lainnya']),
            'jumlah_denda' => $this->faker->randomFloat(2, 1000, 100000),
            'status_pembayaran' => $this->faker->randomElement(['lunas', 'belum']),
        ];
    }
}
