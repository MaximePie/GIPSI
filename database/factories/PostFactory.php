<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {

    $categories = Post::CATEGORIES;

    return [
        'title' => $faker->title(),
        // Link for shared drive hosting a few podcast so far
        'url' => 'https://drive.google.com/open?id=1yANA9m-Dk2kbPDPpS2J-JaSC2mc_B7UM',
        'content' => implode(' ', $faker->words(16)),
        'category' => $categories[random_int(0,2)],
    ];
});
