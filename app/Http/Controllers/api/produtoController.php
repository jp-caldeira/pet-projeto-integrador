<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProdutoModel;

class produtoController extends Controller
{
    public function exibirTodosProdutos(Request $request)
    {
      $todosProdutos = ProdutoModel::all();
      return response()->json($todosProdutos);
    }

    public function exibirUmProduto(Request $request, $id)
    {
      $produto = ProdutoModel::find($id);
      return response()->json($produto);
    }

    public function criarUmProduto(Request $request){

      $produto = new ProdutoModel();
      $produto->nome = $request->nome;
      $produto->tipo_produto= $request->tipo_produto;
      $produto->categoria = $request->categoria;
      $produto->marca = $request->marca;
      $produto->raca = $request->raca;
      $produto->idade = $request->idade;
      $produto->linha = $request->linha;
      $produto->imagem = $request->imagem;
      $produto->tipo_racao = $request->tipo_racao;
      $produto->preco = $request->preco;
      $produto->sabor = $request->sabor;
      $produto->cor = $request->cor;
      $produto->castrado = $request->castrado;
      $produto->corante = $request->corante;
      $produto->indicacao = $request->indicacao;
      $produto->porte = $request->porte;
      $resultado = $produto->save();

      return response()->json(['Produto inserido com sucesso!']);
  }

  public function atualizarUmProduto(Request $request, $id)
  {
    $produtos = ProdutoModel::find($id);
    $produtos->nome = $request->nome;
    $produtos->tipo_produto= $request->tipo_produto;
    $produtos->categoria = $request->categoria;
    $produtos->marca = $request->marca;
    $produtos->raca = $request->raca;
    $produtos->idade = $request->idade;
    $produtos->linha = $request->linha;
    $produtos->tipo_racao = $request->tipo_racao;
    $produtos->preco = $request->preco;
    $produtos->sabor = $request->sabor;
    $produtos->cor = $request->cor;
    $produtos->castrado = $request->castrado;
    $produtos->corante = $request->corante;
    $produtos->indicacao = $request->indicacao;
    $produtos->porte = $request->porte;
    $produtos->save();

    return response()->json(['Produto atualizado com sucesso!']);
  }

  public function deletarUmProduto(Request $request, $id)
  {
    $produtos = ProdutoModel::find($id);
    $produtos->delete();
    return response()->json(['Produto deletado!']);
  }
}
