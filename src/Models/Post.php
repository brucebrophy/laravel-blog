<?php

namespace BruceBrophy\LaravelBlog\Models;

use Illuminate\Database\Eloquent\Model;
use BruceBrophy\LaravelBlog\Contracts\Post as PostContract;

class Post extends Model implements PostContract
{
	public function findBySlug()
	{
		// TODO
	}
}