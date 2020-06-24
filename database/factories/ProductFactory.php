<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word(2, true),
        'description' => $faker->text(200),
        'value' => $faker->numberBetween(15, 1500),
        'available' => $faker->boolean(80),
        'image' => $faker->imageUrl(680, 540, 'cats')
    ];
});
