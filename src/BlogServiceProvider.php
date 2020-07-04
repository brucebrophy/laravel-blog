<?php

namespace BruceBrophy\LaravelBlog;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use BruceBrophy\LaravelBlog\Console\PublishViews;

class BlogServiceProvider extends ServiceProvider
{
	public function boot()
	{
		if ($this->app->runningInConsole()) {
			$this->commands([
				PublishViews::class,
			]);
		}

		$this->publishes([
			__DIR__.'/../config/blog.php' => config_path('blog.php'),
		], 'config');

		$this->publishes([
			__DIR__.'/../database/migrations/create_posts_table.php.stub' => database_path('migrations/'.date('Y_m_d_His', time()).'_create_posts_table.php'),
		], 'migrations');

		$this->loadViewsFrom( resource_path('views/vendor/laravel-blog'), 'laravel-blog');

		$this->registerPackageRoutes();
	}

	private function registerPackageRoutes()
	{
		Route::group(['prefix' => config('blog.routing.prefix')], function () {
			$this->loadRoutesFrom(__DIR__.'/../routes/web.php');
		});
	}
}