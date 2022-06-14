<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Http\Requests\Admin\Tag\UpdateRequest;

class DeleteController extends Controller
{
    public function delete(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('admin.tag.index');
    }
}
