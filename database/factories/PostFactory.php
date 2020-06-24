<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->word(3, true),
        'author' => $faker->firstName(null),
        'content' => paragraph(10, true)
    ];
});
