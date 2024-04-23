<?php

namespace App\Http\Controllers\Blog;

use App\Models\Hastag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HastagsController extends Controller
{
    public function index(Request $request)
    {

        $hastags = Hastag::groupBy('hastag')
            ->selectRaw('hastag, count(*) as total')
            ->paginate(50);

        if ($request->search) {
            $hastags = Hastag::where('hastag', 'like', '%' . request('search') . '%')
                ->groupBy('hastag')
                ->selectRaw('hastag, count(*) as total')
                ->paginate(50);
        }

        $data = [
            'title' => 'Daftar Hastag',
            'hastags' => $hastags,


        ];

        return view('blog.hastags.index', $data);
    }
}