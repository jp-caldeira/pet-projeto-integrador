<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProdutoModel;


class ProdutoController extends Controller
{
    public function exibirTodosProdutos() {
    $produto = ProdutoModel::orderBy('nota')->paginate(15);
    return view('ranking-produtos', ["produtos" => $produto]);
  }

  public function exibirTodos() {
    $produto = ProdutoModel::all();
    return view('lista', ["produtos" => $produto]);
  }


  public function exibirUmProduto($id) {
    $produto = ProdutoModel::find($id);
    return view('exibirprodutos', ["produtos"=> $produto]);
  }


  public function criarUmProduto(Request $request){
      if ($request->isMethod('GET')){
      return view ('criarUmProduto');
    }
    $novoproduto = new ProdutoModel();
    $novoproduto->nome = $request->nome;
    $novoproduto->tipo_produto= $request->tipo_produto;
    $novoproduto->categoria = $request->categoria;
    $novoproduto->marca = $request->marca;

    if($request->hasfile('imagem')){
      // $file = $request->file('imagem');
      // $extension = $file->extension(); //getting image extension
      $filename = date('YmdGisu'). $request->imagem->getClientOriginalName();
      // $file->move("public/img" , $filename);
      $request->imagem->storeAs("public/img", $filename);
      $novoproduto->imagem = $filename;
    }else{
      $novoproduto->imagem = "sem imagem";

    }

    $novoproduto->raca = $request->raca;
    $novoproduto->idade = $request->idade;
    $novoproduto->linha = $request->linha;
    $novoproduto->tipo_racao = $request->tipo_racao;
    $novoproduto->preco = $request->preco;
    $novoproduto->sabor = $request->sabor;
    $novoproduto->cor = $request->cor;
    $novoproduto->castrado = $request->castrado;
    $novoproduto->corante = $request->corante;
    $novoproduto->indicacao = $request->indicacao;
    $novoproduto->porte = $request->porte;

    $resultado = $novoproduto->save();

    return response()->json(['Produto criado com sucesso!']);

}

  public function atualizarUmProduto(Request $request,$id)
  {
    $produto = Produto::find($id);
    $produto->nome = $request->nome;
    $produto->tipo_produto= $request->tipo_produto;
    $produto->categoria = $request->categoria;
    $produto->marca = $request->marca;
    $produto->raca = $request->raca;
    $produto->idade = $request->idade;
    $produto->linha = $request->linha;
    $produto->tipo_racao = $request->tipo_racao;
    $produto->preco = $request->preco;
    $produto->sabor = $request->sabor;
    $produto->cor = $request->cor;
    $produto->castrado = $request->castrado;
    $produto->corante = $request->corante;
    $produto->indicacao = $request->indicacao;
    $produto->porte = $request->porte;
    $produto->save();
    return response()->json(['Produto atualizado com sucesso!']);
  }
  public function deletarUmProduto(Request $request,$id)
  {
    $produto = Produto::find($id);
    $produto->delete();
    return response()->json(['Produto deletado!']);
  }

  //public function enviarFiles(Request $request)
  //{
    //if($request->isMethod('GET')){
     // return view ('uploads');
   // }
   // $nome = $request->file('file')->getClientOriginalName();
   // $save = $request->file('file')->storeAs("public/img", $nome);
    //$urlBase = 'storage/img' .$nome;

    //return view('uploads',['linkImg'=>$urlBase]);
  //}

  public function filtrarCategoria(Request $request, $categoria, $filtro = "nota")
  {

          if ($filtro == "precoBaixo"){
          $produtos = ProdutoModel::where('categoria', '=', $categoria)
                                    ->orderBy('preco')
                                    ->get();
          return response()->json($produtos);
          } else if ($filtro == "precoAlto"){
          $produtos = ProdutoModel::where('categoria', '=', $categoria)
                                    ->orderByDesc('preco')
                                    ->get();
          return response()->json($produtos);
          } else {
          $produtos = ProdutoModel::where('categoria', '=', $categoria)
                                    ->orderByDesc('nota')
                                    ->get();
          return view('ranking-produtos', ["produtos" => $produtos]);
        }

  }

    }
