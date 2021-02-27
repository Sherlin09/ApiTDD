<?php

namespace Database\Factories;

use App\Models\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence
    ];
});