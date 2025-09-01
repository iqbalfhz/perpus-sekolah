<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Anggota>
 */
class AnggotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'tipe' => $this->faker->randomElement(['siswa', 'guru', 'mahasiswa', 'dosen']),
            'kelas_atau_jurusan' => $this->faker->randomElement(['X IPA 1', 'XII IPS 2', 'Teknik Informatika', 'Ekonomi', 'Bahasa', 'Matematika']),
            'kontak' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
