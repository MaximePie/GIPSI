<?php

/** @var Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Post::class, function (Faker $faker) {

    $categories = Post::CATEGORIES;

    return [
        'title' => implode(' ', $faker->words(3)),
        // Link for shared drive hosting a few podcast so far
        'url' => 'https://drive.google.com/open?id=1yANA9m-Dk2kbPDPpS2J-JaSC2mc_B7UM',
        'mindMapUrl' => 'https://drive.google.com/open?id=1yANA9m-Dk2kbPDPpS2J-JaSC2mc_B7UM',
        'duration' => random_int(1, 50),
        'content' => implode(' ', $faker->words(16)),
        'category' => $categories[random_int(0,2)],
    ];
});
