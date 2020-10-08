<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comentarios;
use Faker\Generator as Faker;

$factory->define(Comentarios::class, function (Faker $faker) {
       
    $textos = ["Muito bom, meu pet adorou", "Não recomendo", "Gostei muito!", "Não serviu", "Ruim", "Ok", "Meu pet adorou!", "Péssimo, não recomendo", "Atendeu minhas expectativas", "Joguei meu dinheiro fora"];
    
    return [
        $comentario->nota = $faker->numberBetween(1, 5),        
        $comentario->body = $faker->randomElement($textos),
        $comentario->users_id = $faker->numberBetween(1, 20),
        $comentario->produtos_id = $faker->numberBetween(1, 25)   
    ];
});
