<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HalamanController extends Controller
{

    public function show(Post $post)
    {


        $data = [
            'title' => $post->title,
            'post' => $post,
        ];

        return view('blog.halaman.index', $data);
    }
}
