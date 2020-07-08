<?php

namespace BruceBrophy\LaravelBlog\Traits;

use BruceBrophy\LaravelBlog\Models\Post;

trait HasPosts
{
	public function posts()
	{
		return $this->hasMany(Post::class);
	}
}