<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class EditController extends Controller
{
    public function edit(Category $category)
    {
        $categories = Category::all();
        return view('admin.category.edit', compact('category'));
    }
    
}
