<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Post;
use App\Models\User;
use App\Models\Hastag;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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

        if (request('category')) {
            $category = Category::firstWhere('category_slug', request('category'));
            $title_post =  '#' . $category->category;
        }


        $data = [
            'posts' => Post::latest()->filter(request(['search', 'hastag', 'author', 'category']))->paginate(10),
        ];
        return view('dashboard.post.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'title' => 'required',
            'image' => 'image|file|max:1024',


        ]);

        $data['slug'] =  strtolower(str_replace(' ', '_', $request->title));
        $data['category_id'] = 1;
        $data['reg'] = time();
        $data['article'] = $request->article;
        $data['published_at'] = now();

        $data['user_id'] = 1;
        if ($request->file('image')) {
            $data['image'] = $request->file('image')->store('post-image');
        }
        Post::create($data);

        $post = Post::latest()->first();

        if ($request->hastag) {
            foreach (explode(',', $request->hastag) as $tag) {


                Hastag::create([
                    'hastag' => $tag,
                    'post_id' => $post->id
                ]);
            }
        }

        return  redirect('/dashboard/post');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.post.show', $post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {

        // dd($post);

        $data = [
            'post' => $post,
            'hastag' => Hastag::where('post_id', $post->id)->get(),
        ];
        return view('dashboard.post.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        // dd($post);
        $data = $request->validate([
            'title' => 'required',
            'article' => 'required',


        ]);

        $data['slug'] =  strtolower(str_replace(' ', '_', $request->title));
        $data['category_id'] = 1;
        // $data['reg'] = time();

        if ($request->file('image')) {
            if ($post->image) {
                Storage::delete($post->image);
            }
            $data['image'] = $request->file('image')->store('post-image');
        }

        $data['user_id'] = 1;

        Post::where('id', $post->id)->update($data);

        if ($request->hastag) {
            foreach (explode(',', $request->hastag) as $tag) {


                Hastag::create([
                    'hastag' => $tag,
                    'post_id' => $post->id
                ]);
            }
        }




        return  redirect('/dashboard/post');
    }



    public function setup(Post $post)
    {
        $data = [
            'post' => $post,
            'categorys' => Category::all()
        ];
        return view('dashboard.post.setup', $data);
    }

    public function set(Request $request, Post $post)
    {
        $data['published_at'] = $request->published_at;
        $data['category_id'] = $request->category_id;
        $data['set_title'] = $request->set_title;
        $data['set_image'] = $request->set_image;
        $data['set_active'] = $request->set_active;
        $data['set_author'] = $request->set_author;
        $data['set_article'] = $request->set_article;
        $data['set_comment'] = $request->set_comment;

        Post::where('id', $post->id)->update($data);
        return  redirect('/dashboard/post');
    }



    public function destroy(Post $post)
    {
        //
    }

    public function hastag_delete(Hastag $hastag)
    {
        Hastag::where('id', $hastag->id)->delete();
        return  redirect('/dashboard/post/' . $hastag->post_id . '/edit');
    }
}