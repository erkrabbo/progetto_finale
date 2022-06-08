<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\House;
use Faker\Generator as Faker;

$factory->define(House::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'poster' => $faker->imageUrl(640, 480),
        'num_of_rooms' => $faker->numberBetween(1, 10),
        'num_of_beds' => $faker->numberBetween(1, 10),
        'num_of_bathrooms' => $faker->numberBetween(1, 6),
        'mq' => $faker->numberBetween(100, 1000),
        'sponsored' => $faker->boolean(50),
    ];
});
