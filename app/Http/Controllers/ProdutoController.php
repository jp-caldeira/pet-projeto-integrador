<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProdutoModel;


class ProdutoController extends Controller
{
    public function exibirTodosProdutos(Request $request)
  {
    $todosProdutos = Produto::all();
    return response()->json($todosProdutos);
  }
  public function exibirUmProduto(Request $request,$id)
  {
    $produtos = User::find($id);
    return response()->json($produtos);
  }
  public function criarUmProduto(Request $request){
      if ($request->isMethod('GET')){
      return view ('cadastrarFilme');
    }
    $produtos = new ProdutoModel();
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
    $resultado = $novopeoduto->save();

    return view ("criarUmProdto", ['resultado'=>$resultado]);

}

  public function atualizarUmProduto(Request $request,$id)
  {
    $produtos = Produto::find($id);
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
  public function deletarUmProduto(Request $request,$id)
  {
    $produtos = Produto::find($id);
    $produtos->delete();
    return response()->json(['Produto deletado!']);
  }
}
