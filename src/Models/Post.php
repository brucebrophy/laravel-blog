<?php

namespace BruceBrophy\LaravelBlog\Models;

use Illuminate\Database\Eloquent\Model;
use BruceBrophy\LaravelBlog\Contracts\Post as PostContract;

class Post extends Model implements PostContract
{
	protected $fillable = [
		'title',
		'body',
	];

	public function findBySlug()
	{
		// TODO
	}
}