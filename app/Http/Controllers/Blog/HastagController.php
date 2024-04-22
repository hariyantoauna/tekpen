<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Hastag;
use Illuminate\Http\Request;

class HastagController extends Controller
{

    public function show(Hastag $hastag)
    {



        $data = [
            'title' => ucfirst($hastag->hastag),
            'posts' => Hastag::where('hastag', $hastag->hastag)->get(),


        ];

        return view('blog.hastag.index', $data);
    }
}
