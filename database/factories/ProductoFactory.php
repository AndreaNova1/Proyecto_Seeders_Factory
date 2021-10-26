<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->nombre,
        'email'=>$faker->email,
        'telefono'=>$faker->nombre,
    ];
});
