<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'HARIYANTO S. AUNA',
            'email' => 'hariyantosauna@gmail.com',
        ]);

        Category::create([
            'category' => 'Umum'
        ]);

        Category::create([
            'category' => 'Berita'
        ]);
        Category::create([
            'category' => 'Pengumuman'
        ]);

        Category::create([
            'category' => 'Galeri'
        ]);

        Category::create([
            'category' => 'Iklan'
        ]);
    }
}