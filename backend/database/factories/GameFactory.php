<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(\App\Game::class, function (Faker $faker) {
    return [
        'title' => $faker->streetName,
        'description' => $faker->text,
        'image' => $faker->imageUrl(),
        'price' => $faker->randomDigit,
        'category_id' => \App\Category::get()->random()->id
    ];
});
