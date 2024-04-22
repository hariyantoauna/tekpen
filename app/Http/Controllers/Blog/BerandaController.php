<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->get();
        $data = [
            'title' => "Beranda",
            'posts' => $posts,

        ];

        return view('blog.beranda.index', $data);
    }
}
