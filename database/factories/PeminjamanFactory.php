<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peminjaman>
 */
class PeminjamanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tanggalPinjam = $this->faker->dateTimeBetween('-1 month', 'now');
        $tanggalJatuhTempo = (clone $tanggalPinjam)->modify('+7 days');
        $tanggalKembali = $this->faker->optional(0.7)->dateTimeBetween($tanggalJatuhTempo, '+1 month');
        return [
            'buku_id' => \App\Models\Buku::factory(),
            'anggota_id' => \App\Models\Anggota::factory(),
            'tanggal_pinjam' => $tanggalPinjam,
            'tanggal_jatuh_tempo' => $tanggalJatuhTempo,
            'tanggal_kembali' => $tanggalKembali,
            'status' => $this->faker->randomElement(['dipinjam', 'dikembalikan', 'hilang', 'rusak']),
            'jenis_denda' => $this->faker->optional()->randomElement(['terlambat', 'hilang', 'rusak', 'none']),
            'jumlah_denda' => $this->faker->optional()->randomFloat(2, 1000, 100000),
            'tingkat_kerusakan' => $this->faker->optional()->randomElement(['minimum', 'sedang', 'parah']),
        ];
    }
}
