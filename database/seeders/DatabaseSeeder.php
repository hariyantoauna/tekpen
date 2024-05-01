<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Hastag;
use App\Models\Applied;
use App\Models\Category;
use App\Models\Navigation;
use App\Models\PostActive;
use App\Models\UserActive;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $editor = User::factory()->create([
            'name' => 'Hariyanto S. Auna',
            'username' => 'hariyantosauna',
            'email' => 'hariyantosauna@gmail.com',
            'user_active' => 2
        ]);

        $user = User::factory()->create([
            'name' => 'Nuriyati Hamzah',
            'username' => 'nuriyatihamzah',
            'email' => 'nurhamzah@gmail.com',
            'user_active' => 1

        ]);

        Category::create([
            'category' => 'Umum',
            'category_slug' => 'umum',
        ]);

        Category::create([
            'category' => 'Berita',
            'category_slug' => 'berita',
        ]);
        Category::create([
            'category' => 'Info',
            'category_slug' => 'info',
        ]);

        Category::create([
            'category' => 'Flayer',
            'category_slug' => 'flayer',
        ]);

        Category::create([
            'category' => 'Dokumen',
            'category_slug' => 'dokumen',
        ]);

        Category::create([
            'category' => 'Galeri',
            'category_slug' => 'galeri',
        ]);

        Category::create([
            'category' => 'Iklan',
            'category_slug' => 'iklan',
        ]);

        Category::create([
            'category' => 'Slaide',
            'category_slug' => 'slaide',
        ]);




        PostActive::create([
            'active' => 'Submit'
        ]);

        PostActive::create([
            'active' => 'Review'
        ]);

        PostActive::create([
            'active' => 'Diterbitkan'
        ]);
        Role::create([

            'name' => 'user',

        ]);

        $editor = Role::create([

            'name' => 'author',

        ]);

        Role::create([

            'name' => 'editor',

        ]);

        Permission::create([
            'name' => 'read',
        ]);
        Permission::create([
            'name' => 'create',
        ]);
        Permission::create([
            'name' => 'update',
        ]);
        Permission::create([
            'name' => 'delete',
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

        UserActive::create([
            'name' => 'Rigitrasi',

        ]);

        UserActive::create([
            'name' => 'Aktif',

        ]);
    }
}