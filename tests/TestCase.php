<?php

namespace BruceBrophy\LaravelBlog\Tests;

use BruceBrophy\LaravelBlog\BlogServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
	protected function getEnvironmentSetUp($app)
	{
		include_once __DIR__.'/../database/migrations/create_posts_table.php.stub';

		(new \CreatePostsTable)->up();
	}

	protected function getPackageProviders($app)
	{
		return [
			BlogServiceProvider::class,
		];
	}
}