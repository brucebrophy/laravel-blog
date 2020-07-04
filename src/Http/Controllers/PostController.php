<?php

namespace BruceBrophy\LaravelBlog\Http\Controllers;

use BruceBrophy\LaravelBlog\Models\Post;

class PostController
{
	public function index()
	{
		return view('laravel-blog::blog.posts.index', [

		]);
	}

	public function create()
	{
		return view('laravel-blog::blog.posts.index', [

		]);
	}

	public function store()
	{
		return redirect()->route('posts.show');
	}

	public function show(Post $post)
	{
		return view('laravel-blog::blog.posts.show', [

		]);
	}

	public function edit(Post $post)
	{
		return view('laravel-blog::blog.posts.edit', [

		]);
	}

	public function update(Post $post)
	{
		return redirect()->route('posts.show');
	}

	public function destroy(Post $post)
	{
		return redirect()->route('posts.index');
	}
}