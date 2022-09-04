<?php

namespace App\Services\Post;

use App\Models\Post;

class Service
{
    public function store ($data)
    {
        if (isset($data['tags'])) {
            $tags = $data['tags'];
            unset($data['tags']);
            $post = Post::create($data);
            $post->tags()->attach($tags);
        } else {
            $post = Post::create($data);
        }
        return $post;
    }

    public function update ($data, $post)
    {
        $tags = $data['tags'];
        unset($data['tags']);

        $post->update($data);
//        $post = $post->fresh();
        $post->tags()->sync($tags);
        return $post->fresh();
    }

    public function destroy ($post)
    {
        $post->delete($post);
    }
}
