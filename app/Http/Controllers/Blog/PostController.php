<?php

namespace App\Http\Controllers\Blog;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hastag;
use Illuminate\Foundation\Auth\User;

class PostController extends Controller
{
    public function index()
    {

        $title_post = "Artikel";
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title_post = 'Penulis: ' . $author->name;
        }

        if (request('hastag')) {
            $hastag = Hastag::firstWhere('hastag', request('hastag'));
            $title_post =  '#' . $hastag->hastag;
        }

        $data = [

            'title' => "Beranda",
            'title_post' => $title_post,
            'posts' => Post::where('set_active', 3)->latest()->filter(request(['search', 'hastag', 'author', 'active']))->paginate(10),

        ];

        return view('blog.post.index', $data);
    }
}