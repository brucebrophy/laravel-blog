<?php

namespace BruceBrophy\LaravelBlog\Http\Controllers;

use BruceBrophy\LaravelBlog\Models\Post;
use Illuminate\Http\Request;

class PostController
{
    public function index()
    {
        $posts = Post::paginate(10);

        return view('laravel-blog::blog.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('laravel-blog::blog.posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            //			'published_at' => 'required',
        ]);

        $post = new Post;
        $post->fill($request->input());
        $post->user_id = auth()->id();
        $post->save();

        return redirect()->route('posts.show', $post->id);
    }

    public function show(Post $post)
    {
        return view('laravel-blog::blog.posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('laravel-blog::blog.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        $post->update($request->input());

        return redirect()->route('posts.show', $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }
}
