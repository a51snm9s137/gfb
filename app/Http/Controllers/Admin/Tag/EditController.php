<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class EditController extends Controller
{
    public function edit(Tag $tag)
    {
        $tags = Tag::all();
        return view('admin.tag.edit', compact('tag'));
    }
    
}
