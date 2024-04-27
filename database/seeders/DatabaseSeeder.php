<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Hastag;
use App\Models\Applied;
use App\Models\Category;
use App\Models\Navigation;
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
            'name' => 'Hariyanto S. Auna',
            'username' => 'hariyantosauna',
            'email' => 'hariyantosauna@gmail.com',
        ]);

        User::factory()->create([
            'name' => 'Nuriyati Hamzah',
            'username' => 'nuriyatihamzah',
            'email' => 'nurhamzah@gmail.com',
        ]);

        Category::create([
            'category' => 'General',
            'category_slug' => 'general',
        ]);

        Category::create([
            'category' => 'News',
            'category_slug' => 'news',
        ]);
        Category::create([
            'category' => 'Info',
            'category_slug' => 'info',
        ]);

        Category::create([
            'category' => 'Galeri',
            'category_slug' => 'galeri',
        ]);

        Category::create([
            'category' => 'Advertisement',
            'category_slug' => 'advertisement',
        ]);





        // navigation 

        Navigation::create([

            'name' => "Pengaturan",
            'url' => 'pengaturan',
            'sort' => 1,
            'applied_id' => 1,
        ]);

        Navigation::create([

            'name' => "Menu",
            'url' => 'menu',
            'sort' => 2,
            'applied_id' => 1,
        ]);

        Navigation::create([

            'name' => "User",
            'url' => 'user',
            'sort' => 3,
            'main_menu' => 1,
            'applied_id' => 1,
        ]);

        // Applied 

        Applied::create([
            'applied' => "Blog Menu Utama"
        ]);

        Applied::create([
            'applied' => "Dashboard Sidebar"
        ]);
    }
}