<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProdutoModel;
use Faker\Generator as Faker;

$factory->define(ProdutoModel::class, function (Faker $faker) {
    return [
      "nome" => $faker->randomElement(['Ração para cães de médio porte', 'Ração para cães de pequeno porte', 'Ração para cães de grande porte', 'Ração para gatos de médio porte','Cama para gatos', 'Cama para cachorros', 'Ração diet para gatos', 'Ração Vegana', 'Ração diet para cachorros', 'Brinquedo para cachorro', 'Brinquedo para gatos', 'Caixa de Areia', 'Arranhador', 'Petisco para cães', 'Petisco para gatos']),
      "preco" => $faker->randomElement([9.90, 12.90, 35.50, 49.90, 16.50, 31.20, 33.40, 60, 69.99, 81.29]),
      "tipo_produto" => $faker->randomElement(["ração", "brinquedo", "petisco", "higiene"]),
      "categoria" => $faker->randomElement(["cachorro", "gato", "aves"]),
      "marca" => $faker->company,
      "imagem" => $faker->randomElement(["racao1.jpg", "racao2.jpg", "racao3.jpg", "racao4.jpg", "produto1.jpg", "produto2.jpg", "produto3.jpg", "produto4.jpg", "produto5.jpeg", "produto6.png", "produto7.jpg", "produto8.jpg"]),
      "comentários" => $faker->randomElement(["Gostei muito!", null, "Não serviu", "Ruim", "Ok", "Meu pet adorou!", "Péssimo, não recomendo"]),
      "nota" => $faker->randomElement([null, 1, 1.5, 2, 2.5, 3, 3.5, 4.5, 5])
    ];
});
