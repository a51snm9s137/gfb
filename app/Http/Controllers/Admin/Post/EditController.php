<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;

class EditController extends BaseController
{
    public function edit(Post $post)
    {
        $posts = Post::all();
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.post.edit', compact('post', 'categories', 'tags'));
    }

}
