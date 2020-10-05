<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pets;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(Pets::class, function (Faker $faker) {

    $petNomes = ["Floquinho", "Mingau", "Sansão", "Frederico", "Pikachu", "Penélope", "Asdrúbal", "Yoda", "Nemo", "Algodão", "Rilary", "Astolfo"];
    $especies = ['Cachorro', 'Gato', 'Cachorro', 'Gato', 'Cachorro', 'Gato', 'Papagaio', 'Cavalo', 'Calopsita', 'Iguana'];

    return [
         "nome"=>Arr::random($petNomes),
         "especie"=>Arr::random($especies),
         "genero"=>$faker->randomElement(['Macho', 'Fêmea']),
         "nascimento"=>$faker->date('Y-m-d'),
         "comentarios"=>$faker->realText('10'),
         "preferencias"=>$faker->realText('20'),
        //  "users_id"=> 1,
      ];
});
