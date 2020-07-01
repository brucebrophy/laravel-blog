<?php

namespace BruceBrophy\LaravelBlog;

use Illuminate\Support\ServiceProvider;
use BruceBrophy\LaravelBlog\Contracts\Post as PostContract;

class LaravelBlogServiceProvider extends ServiceProvider
{
	public function boot()
	{
		$this->app->bind(PostContract::class);

		$this->publishes([
			__DIR__.'/../database/migrations/create_posts_table.php.stub' => database_path('migrations/'.date('Y_m_d_His', time()).'_create_posts_table.php'),
		], 'migrations');
	}
}