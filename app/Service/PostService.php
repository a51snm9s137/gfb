<?php

namespace App\Service;

use Illuminate\Support\Facades\Storage;
use App\Models\Post;

class PostService
{
    public function store($data)
    {
        $tagIds = $data['tag_ids'];
        unset($data['tag_ids']);
        $post = Post::firstOrCreate($data);
        $post->tags()->attach($tagIds);
    }
    public function update($data, $post)
    {
        $tagIds = $data['tag_ids'];
        unset($data['tag_ids']);
        $post->update($data);
        $post->tags()->sync($tagIds);

        return $post;
    }
}
