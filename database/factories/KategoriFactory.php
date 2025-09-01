<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kategori>
 */
class KategoriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $kategoriList = [
            'Fiksi', 'Non-Fiksi', 'Referensi', 'Pelajaran', 'Komik', 'Biografi', 'Majalah', 'Buku Digital', 'Karya Ilmiah', 'Buku Agama', 'Buku Bahasa Asing'
        ];
        return [
            'nama' => $this->faker->randomElement($kategoriList),
        ];
    }
}
