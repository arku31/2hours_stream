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

$factory->define(\App\Cart::class, function (Faker $faker) {
    $game = \App\Game::get()->random();
    return [
        'game_id' => $game->id,
        'price' => $game->price,
        'user_id' =>  \App\User::get()->random()->id,
        'order_id' => null
    ];
});
