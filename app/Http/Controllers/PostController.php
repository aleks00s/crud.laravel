<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;


class PostController extends Controller
{
    public function index ()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create ()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts.create', compact('categories', 'tags'));
    }

    public function store ()
    {
        $data = request()->validate([
            'title'=>'required|string',
            'content'=>'required|string',
            'image'=>'string',
            'category_id'=>'',
            'tags'=>'',
        ]);
        if (isset($data['tags'])) {
            $tags = $data['tags'];
            unset($data['tags']);
            $post = Post::create($data);
            $post->tags()->attach($tags);
        } else {
            Post::create($data);
        }
        return redirect()->route('posts.index');
    }

    public function show (Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit (Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts.edit', compact('post', 'categories', 'tags'));
    }

    public function update (Post $post)
    {
        $data = request()->validate([
            'title'=>'string',
            'content'=>'string',
            'image'=>'string',
            'category_id'=>'',
            'tags'=>'',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);

        $post->update($data);
        $post = $post->fresh();
        $post->tags()->sync($tags);
        return redirect()->route('posts.show', $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete($post);
        return redirect()->route('posts.index');
    }
}
