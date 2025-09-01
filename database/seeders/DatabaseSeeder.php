<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Set locale Faker ke bahasa Indonesia
        \Faker\Factory::create('id_ID');

        // User
        User::factory(10)->create();
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
        ]);

        // Rak
        \App\Models\Rak::factory(5)->create();
        // Kategori
        \App\Models\Kategori::factory(5)->create();
        // Anggota
        \App\Models\Anggota::factory(20)->create();
        // Buku
        \App\Models\Buku::factory(30)->create();
        // Peminjaman
        \App\Models\Peminjaman::factory(40)->create();
        // Denda
        \App\Models\Denda::factory(15)->create();

        // Seeder lain jika diperlukan
        $this->call([
            PostSeeder::class,
            ContactSeeder::class,
        ]);
    }
}
