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

$factory->define(\App\Order::class, function (Faker $faker) {
    return [
        'user_id' => \App\User::get()->random()->id,
        'status' => 'created',
        'sum' => rand(1000, 10000)
    ];
});
