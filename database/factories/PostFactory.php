<?php

namespace Database\Factories;
use App\Models\Post;
use Faker\Generator as Faker;


$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence
    ];
});