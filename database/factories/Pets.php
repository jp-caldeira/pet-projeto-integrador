<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pets;
use Faker\Generator as Faker;

$factory->define(Pets::class, function (Faker $faker) {
    return [
        "nome"=>$faker->name
      
    ];
});
