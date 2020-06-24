<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'post_id' => $faker->numberBetween(1, 30),
        'author' => $faker->firstName(null),
        'content' => paragraph(4, true),
    ];
});
