<?php

namespace BruceBrophy\LaravelBlog\Models;

use BruceBrophy\LaravelBlog\Contracts\Post as PostContract;
use Illuminate\Database\Eloquent\Model;

class Post extends Model implements PostContract
{
    protected $fillable = [
        'title',
        'slug',
        'body',
        'user_id',
        'published_at',
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
