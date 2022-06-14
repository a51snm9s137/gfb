<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Filters\PostFilter;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;


class IndexController extends BaseController
{
    public function index(PostFilter $request)
    {
        $this->service->index();

        $posts = Post::filter($request)->paginate(8);
        $lastPosts = Post::orderBy('created_at', 'DESC')->take(3)->get();

        return view('main.index', compact('posts', 'lastPosts'));

    }


}
