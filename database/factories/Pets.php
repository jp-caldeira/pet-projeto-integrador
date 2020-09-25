<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pets;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(Pets::class, function (Faker $faker) {

    $petNomes = ["Floquinho", "Mingau", "Sansão", "Frederico", "Pikachu", "Penélope", "Asdrúbal", "Yoda", "Nemo", "Algodão"];
    $especies = ['Cachorro', 'Gato', 'Papagaio', 'Calopsita'];

    return [
        // "nome"=>Arr::random($petNomes),
        // "especie"=>Arr::random($especies),
        // "genero"=>$faker->randomElement(['Macho', 'Fêmea']),
        // "nascimento"=>$faker->date('Y-m-d'),
        // "comentarios"=>$faker->realText('10')
      ];
});
