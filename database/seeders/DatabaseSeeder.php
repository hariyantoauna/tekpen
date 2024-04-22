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
            'name' => 'HARIYANTO S. AUNA',
            'email' => 'hariyantosauna@gmail.com',
        ]);

        Category::create([
            'category' => 'General'
        ]);

        Category::create([
            'category' => 'News'
        ]);
        Category::create([
            'category' => 'Info'
        ]);

        Category::create([
            'category' => 'Galeri'
        ]);

        Category::create([
            'category' => 'Advertisement'
        ]);




        Post::create([
            'title' => "Judul Post I",
            'article' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto explicabo quas dicta repellat, laborum itaque? Sapiente fugiat velit quidem ullam qui eveniet, maiores quo culpa voluptatum ad similique. Id debitis qui consectetur vitae. Qui provident deserunt minus sint deleniti odit numquam vero, cumque facilis optio dolores sapiente, accusantium, quasi quisquam necessitatibus culpa! Repudiandae reprehenderit maiores, voluptatum et accusantium error deserunt tempora mollitia necessitatibus veritatis amet officiis praesentium laboriosam beatae asperiores tempore magni! Accusamus tenetur ab, labore expedita aliquam architecto, temporibus praesentium natus debitis officia fuga. Dolores nemo repellat magnam iste fugit incidunt obcaecati commodi eius quos voluptatibus fuga quis ipsam culpa eaque numquam dignissimos, nihil totam facilis deserunt excepturi voluptatum dolorum sunt. Amet delectus dolore explicabo fugit eveniet nesciunt earum sit cupiditate corrupti expedita vel deleniti, soluta tempore ut quis libero quo laboriosam esse veritatis quas! Quia corporis esse tempore id, quod a accusamus suscipit porro praesentium blanditiis, voluptatum voluptas atque distinctio voluptatem debitis incidunt, quibusdam error! Recusandae aspernatur quisquam consequatur. Autem distinctio earum labore reiciendis iure suscipit enim modi eius soluta? Est tempore beatae blanditiis, unde omnis sapiente magni!",
            'category_id' => 2,
            'slug' => "judul_post_1",
            'published_at' => now(),
            'reg' => time(),
            'author' => "Nuriyati",


        ]);


        Post::create([
            'title' => "Judul Post II",
            'article' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto explicabo quas dicta repellat, laborum itaque? Sapiente fugiat velit quidem ullam qui eveniet, maiores quo culpa voluptatum ad similique. Id debitis qui consectetur vitae. Qui provident deserunt minus sint deleniti odit numquam vero, cumque facilis optio dolores sapiente, accusantium, quasi quisquam necessitatibus culpa! Repudiandae reprehenderit maiores, voluptatum et accusantium error deserunt tempora mollitia necessitatibus veritatis amet officiis praesentium laboriosam beatae asperiores tempore magni! Accusamus tenetur ab, labore expedita aliquam architecto, temporibus praesentium natus debitis officia fuga. Dolores nemo repellat magnam iste fugit incidunt obcaecati commodi eius quos voluptatibus fuga quis ipsam culpa eaque numquam dignissimos, nihil totam facilis deserunt excepturi voluptatum dolorum sunt. Amet delectus dolore explicabo fugit eveniet nesciunt earum sit cupiditate corrupti expedita vel deleniti, soluta tempore ut quis libero quo laboriosam esse veritatis quas! Quia corporis esse tempore id, quod a accusamus suscipit porro praesentium blanditiis, voluptatum voluptas atque distinctio voluptatem debitis incidunt, quibusdam error! Recusandae aspernatur quisquam consequatur. Autem distinctio earum labore reiciendis iure suscipit enim modi eius soluta? Est tempore beatae blanditiis, unde omnis sapiente magni!",
            'category_id' => 3,
            'slug' => "judul_post_2",
            'published_at' => now(),
            'reg' => time(),
            'author' => "Hariyanto",

        ]);


        // hastag 
        Hastag::create([
            'post_id' => 1,
            'hastag' => 'wisata',

        ]);

        Hastag::create([
            'post_id' => 1,
            'hastag' => 'kriminal',

        ]);

        Hastag::create([
            'post_id' => 2,
            'hastag' => 'wisata',

        ]);
        Hastag::create([
            'post_id' => 2,
            'hastag' => 'kriminal',

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
