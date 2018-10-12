<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Usuario::class, function (Faker $faker) {
    return [
      'nombre' => $faker->name,
      'email' => $faker->unique()->safeEmail,
      'password' => bcrypt('123456')
    ];
});
