<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->realText(rand(10, 40));
    $short_title = mb_strlen($title) > 30 ? mb_substr($title, 0, 30) . '...' : $title;
    $created = $faker->dateTimeBetween('-10 days', '-2 days');
    return [
        'post_title' => $title,
        'short_title' => $short_title,
        'author_id' => rand(1, 4),
        'description' => $faker->realText(rand(100, 300)),
        'created_at' => $created,
        'updated_at' => $created
    ];
});
