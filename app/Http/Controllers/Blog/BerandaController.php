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
        $posts = Post::where('set_active', 3)->latest()->take(6)->get();
        $data = [
            'title' => "Beranda",
            'posts' => $posts,
            'slides' => Post::where('category_id', 8)->get(),

        ];

        return view('blog.beranda.index', $data);
    }
}
