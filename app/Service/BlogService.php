<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use App\Models\Post;
use App\Models\Category;

class BlogService
{
    public function index()
    {
        $categories = Category::all();
        $randomPosts = Post::get()->random(3);
        $carouselPosts = Post::get()->random(2);

        View::share([
            'categories' => $categories,
            'randomPosts' => $randomPosts,
            'carouselPosts' => $carouselPosts,
        ]);
    }

}
