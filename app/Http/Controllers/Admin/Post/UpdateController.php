<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use App\Http\Requests\Admin\Post\UpdateRequest;

class UpdateController extends BaseController
{
    public function update(UpdateRequest $request, Post $post)
    {
        $tags = Tag::all();
        $categories = Category::all();

        $data = $request->validated();
        $post = $this->service->update($data, $post);
        $post->save();

        return redirect()->route('admin.post.index', compact('post', 'categories', 'tags'));
    }

}
