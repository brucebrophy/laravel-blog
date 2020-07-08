<?php

namespace BruceBrophy\LaravelBlog\Models;

use Illuminate\Database\Eloquent\Model;
use BruceBrophy\LaravelBlog\Contracts\Post as PostContract;

class Post extends Model implements PostContract
{
	protected $fillable = [
		'title',
		'slug',
		'body',
		'user_id',
		'published_at'
	];

	public function user()
	{
		return $this->belongsTo(config('blog.user_model'));
	}

	public function findBySlug()
	{
		// TODO
	}
}