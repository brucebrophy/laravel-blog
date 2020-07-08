<?php

use BruceBrophy\LaravelBlog\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
        'published_at' => $faker->dateTimeBetween('-1 years'),
    ];
});
