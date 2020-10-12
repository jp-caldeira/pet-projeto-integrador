<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comentarios;
use Faker\Generator as Faker;

$factory->define(Comentarios::class, function (Faker $faker) {

    $textos = ["Muito bom, meu pet adorou", "Não recomendo", "Gostei muito!", "Não serviu", "Ruim", "Ok", "Meu pet adorou!", "Péssimo, não recomendo", "Atendeu minhas expectativas", "Joguei meu dinheiro fora"];
    $notas = ["2,5", "3,5", "4,5", "5", "4", "3", "2"];

    return [
        "nota" => $faker->randomElement($notas),
        "body" => $faker->randomElement($textos),
        "users_id" => $faker->numberBetween(1, 8),
        "produtos_id" => $faker->numberBetween(1, 10)
    ];
});
