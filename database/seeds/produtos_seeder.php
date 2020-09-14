<?php

use Illuminate\Database\Seeder;
use App\ProdutoModel;

class produtos_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $produto = new ProdutoModel();
      $produto->nome = "Ração Magnus para cachorro 2kg";
      $produto->preco = 29.90;
      $produto->tipo_produto = "ração";
      $produto->categoria = "cachorro";
      $produto->marca = "Magnus";
      $produto->imagem = "racao1.jpg";
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração Magnus para cachorro 2kg";
      $produto->preco = 19.90;
      $produto->tipo_produto = "ração";
      $produto->categoria = "cachorro";
      $produto->marca = "Magnus";
      $produto->imagem = "racao2.jpg";
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração Magnus 2kg";
      $produto->preco = 25.49;
      $produto->tipo_produto = "ração";
      $produto->categoria = "cachorro";
      $produto->marca = "Magnus";
      $produto->imagem = "racao3.jpg";
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração para cachorros";
      $produto->preco = 25.49;
      $produto->tipo_produto = "ração";
      $produto->categoria = "cachorro";
      $produto->marca = "Lorem Ipsum";
      $produto->imagem = "racao4.jpg";
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração para cachorros";
      $produto->preco = 23.99;
      $produto->tipo_produto = "ração";
      $produto->categoria = "cachorro";
      $produto->marca = "Magnus";
      $produto->imagem = "racao5.jpg";
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração para cachorros";
      $produto->preco = 23.99;
      $produto->tipo_produto = "ração";
      $produto->categoria = "cachorro";
      $produto->marca = "Lorem Ipsum";
      $produto->imagem = "racao6.jpg";
      $produto->save();


    }
}
