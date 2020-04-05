<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Dispensador;
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

$factory->define(Dispensador::class, function (Faker $faker) {
    return [
        'id' => $faker->numberBetween(0, 20),
        'name' => $faker->text,
        'description'=> $faker->sentence(4),
        'times'=> $faker->numberBetween(0,50)
    ];
});
