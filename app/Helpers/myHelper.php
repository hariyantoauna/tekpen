<?php

use App\Models\Post;
use App\Models\Hastag;
use App\Models\Navigation;

if (!function_exists('getMenus')) {
    function getMenus()
    {
        return Navigation::with('subMenus')->whereNull('main_menu')->get();
    }
}



if (!function_exists('getPosts')) {
    function getPosts()
    {
        return Post::where('set_active', 1)->latest()->take(6)->get();
    }
}


if (!function_exists('getHastags')) {
    function getHastags()
    {
        return Hastag::groupBy('hastag')
            ->selectRaw('hastag, count(*) as total')
            ->latest()
            ->take(30)
            ->get();
    }
}
