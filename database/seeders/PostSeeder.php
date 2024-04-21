<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            'article' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto explicabo quas dicta repellat, laborum itaque? Sapiente fugiat velit quidem ullam qui eveniet, maiores quo culpa voluptatum ad similique. Id debitis qui consectetur vitae. Qui provident deserunt minus sint deleniti odit numquam vero, cumque facilis optio dolores sapiente, accusantium, quasi quisquam necessitatibus culpa! Repudiandae reprehenderit maiores, voluptatum et accusantium error deserunt tempora mollitia necessitatibus veritatis amet officiis praesentium laboriosam beatae asperiores tempore magni! Accusamus tenetur ab, labore expedita aliquam architecto, temporibus praesentium natus debitis officia fuga. Dolores nemo repellat magnam iste fugit incidunt obcaecati commodi eius quos voluptatibus fuga quis ipsam culpa eaque numquam dignissimos, nihil totam facilis deserunt excepturi voluptatum dolorum sunt. Amet delectus dolore explicabo fugit eveniet nesciunt earum sit cupiditate corrupti expedita vel deleniti, soluta tempore ut quis libero quo laboriosam esse veritatis quas! Quia corporis esse tempore id, quod a accusamus suscipit porro praesentium blanditiis, voluptatum voluptas atque distinctio voluptatem debitis incidunt, quibusdam error! Recusandae aspernatur quisquam consequatur. Autem distinctio earum labore reiciendis iure suscipit enim modi eius soluta? Est tempore beatae blanditiis, unde omnis sapiente magni!",
            'category_id' => 1,
            'slag' => "lorem_ipsum_dolor_sit_amet_consectetur_adipisicing_elit",

        ]);
    }
}