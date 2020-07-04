<?php

namespace BruceBrophy\LaravelBlog\Tests\Unit;

use BruceBrophy\LaravelBlog\Tests\TestCase;

class PostTest extends TestCase
{
	public function testUserCanCreatePost()
	{
		$response = $this->followingRedirects()
			->post(route('posts.store'), [
			'title' => 'hello',
			'body' => 'world'
		]);

		$response->assertOk()
			->assertViewHas('post')
			->assertViewIs('laravel-blog::blog.posts.show');
	}
}