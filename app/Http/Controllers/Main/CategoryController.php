<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class CategoryController extends BaseController
{
    public function category($categoryId = 0)
    {

        $this->service->index();

        if($categoryId){
            $posts = Post::where('category_id', $categoryId);
        }else {
            $posts=Post::latest();
        }

        return view('main.category', [
            'posts' => $posts->orderBy('created_at', 'DESC')->paginate(6),
            'categoryId' => $categoryId,
        ]);
    }

}
