<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => $this->faker->sentence(3),
            'penulis' => $this->faker->name(),
            'kategori_id' => \App\Models\Kategori::factory(),
            'rak_id' => \App\Models\Rak::factory(),
            'stok' => $this->faker->numberBetween(1, 20),
            'lokasi' => $this->faker->optional()->word(),
            'barcode' => $this->faker->unique()->ean13(),
            'harga' => $this->faker->randomFloat(2, 10000, 500000),
            'foto' => $this->faker->optional()->imageUrl(300, 400, 'books'),
        ];
    }
}
