<?php

use Faker\Generator as Faker;
use BruceBrophy\LaravelBlog\Models\Post;

$factory->define(Post::class, function (Faker $faker) {
	return [
		'title' => $faker->sentence,
		'body' => $faker->paragraph,
		'published_at' => $faker->dateTimeBetween('-1 years'),
	];
});