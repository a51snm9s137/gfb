<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class ShowController extends BaseController
{
    public function show(Post $post)
    {
        $this->service->index();

        return view('main.show', compact('post'));
    }

}
