<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProdutoModel;


class ProdutoController extends Controller
{
     //ROTA PARA RANKING PRODUTO//

      public function exibirTodosProdutos() {
      $produto = ProdutoModel::orderBy('nota')->paginate(10);
      return view('ranking-produtos', ["produtos" => $produto, "titulo" => "Ranking de Produtos"]);
    }

    //ROTA PARA A LISTA ADM PRODUTO//


    public function exibirTodos() {
      $produto = ProdutoModel::all();
      return view('lista', ["produtos" => $produto]);
    }

    //EXIBIR PRODUTO//


    public function exibirUmProduto($id) {
      $produto = ProdutoModel::find($id);      
      return view('exibirUmProduto', ["produtos"=> $produto, "id"=>$id]);
    }

    //CRIAR PRODUTO//


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
        $novoproduto->imagem = "sem-imagem.jpg";

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

      return view('lista', ["novosprodutos"=> $novoproduto]);

    }
        /**
             * Exibe o formulário de edição de produto
             */
            function editar(Request $request, $produto_id) {
              $produto = ProdutoModel::find($produto_id);
              return view('atualizarUmProduto', ['produto' => $produto]);
          }

          function atualizarUmProduto(Request $request, ProdutoModel $produto) {
              $dataValidate = $request->validate([
                  'nome' => 'String|required',
                  'tipo_produto' => 'String|required',
                  'categoria' => 'String|required',
                  'marca' => 'String|required',
                  'raca' => 'String|required',
                  'idade' => 'String|required',
                  'linha' => 'String|required',
                  'tipo_racao' => 'String|required',
                  'preco' => 'numeric|required',
                  'sabor' => 'String|required',
                  'cor' => 'String|required',
                  'castrado' => 'String|required',
                  'indicacao' => 'String|required',
                  'porte' => 'String|required'
              ]);

              $produto->nome = $dataValidate['nome'];
              $produto->tipo_produto = $dataValidate['tipo_produto'];
              $produto->categoria = $dataValidate['categoria'];
              $produto->marca = $dataValidate['marca'];

              if($request->hasfile('imagem')){
                // $file = $request->file('imagem');
                // $extension = $file->extension(); //getting image extension
                $filename = date('YmdGisu'). $request->imagem->getClientOriginalName();
                // $file->move("public/img" , $filename);
                $request->imagem->storeAs("public/img", $filename);
                $produto->imagem = $filename;
              }else{
                $produto->imagem = "sem-imagem.jpg";
        
              }

              $produto->raca = $dataValidate['raca'];
              $produto->idade = $dataValidate['idade'];
              $produto->linha = $dataValidate['linha'];
              $produto->tipo_racao = $dataValidate['tipo_racao'];
              $produto->preco = $dataValidate['preco'];
              $produto->sabor = $dataValidate['sabor'];
              $produto->cor = $dataValidate['cor'];
              $produto->castrado = $dataValidate['castrado'];
              $produto->indicacao = $dataValidate['indicacao'];
              $produto->porte = $dataValidate['porte'];
              $produto->save();

              return redirect('/lista');
          }

    public function deletarProduto($id){

      $produto = ProdutoModel::find($id);
      $produto->delete();

      return redirect()->action("ProdutoController@exibirTodos");
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

  //// PESQUISA PRODUTO ///

  public function pesquisar(Request $request)
  {
      $request->validate([
        'pesquisa' => 'required|min:3'
      ]);

      $pesquisa = $request->get('pesquisa');
      //  $resultado = ProdutoModel::where('nome', 'like', '%'.$pesquisa.'%')
      //                          ->orWhere('tipo_produto', 'like', '%'.$pesquisa.'%')
      //                          ->get();

      $resultado = ProdutoModel::search($pesquisa, null, true)->get();

      return view('resultado-busca', ["produtos" => $resultado, "pesquisa" => $pesquisa]);
  }

  public function filtrar(Request $request)
  {
    $categoria = $request->get('pet');
    $tipo_produto = $request->get('produtos');

    $pesquisa = $tipo_produto." ".$categoria;
    $pesquisa = ucwords($pesquisa);

    if($categoria === "Pet" && $tipo_produto === "Produtos"){
      return redirect('/ranking-produtos');
    }

    if($categoria === "Pet"){
      $resultado = ProdutoModel::where('tipo_produto', "=", $tipo_produto)->get();
    } else if($tipo_produto === "Produtos"){
      $resultado = ProdutoModel::where('categoria', "=", $categoria)->get();
    } else {
    $resultado = ProdutoModel::where('categoria', "=", $categoria)->
                              where('tipo_produto', "=", $tipo_produto)->get();
    }

    return view('resultado-busca', ["produtos" => $resultado, "pesquisa" => $pesquisa]);

  }


}
