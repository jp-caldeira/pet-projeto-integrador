<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Comentarios;

class ComentariosController extends Controller
{
    public function criarComentario($id, Request $request)
    {
        $comentario = new Comentarios();
        $comentario->nota= $request->nota;
        $comentario->body= $request->body;
        $comentario->users_id = auth()->user()->id;
        $comentario->produtos_id= intval($id);
        // dd($comentario);
        $comentario->save();

    return redirect()->route('verproduto',['id'=>$id]);

    }

    public function exibirComentarios()
    {
      $comentarios = Comentarios::all();
      return view('lista-comentarios', ["comentarios" => $comentarios]);
    }

    public function editarComentario($id)
    {
      $comentario = Comentarios::find($id);
      return view('atualizarComentario', ["comentario" => $comentario]);
    }

    public function atualizarComentario(Request $request, $id)
    {

      $mensagemErro = [
        "required" => "O campo :attribute não pode ser vazio"
      ];

      $dataValidate = $request->validate([
        "comentario" => "required"
      ], $mensagemErro);

      $comentario = Comentarios::find($id);

      $comentario->body = $request->comentario;
      $resultado = $comentario->update();

      return view('atualizarComentario', ["comentario" => $comentario, "mensagem" => "Comentário Atualizado"]);

    }

    public function deletarComentario($id)
    {
      $comentario = Comentarios::find($id);
      $comentario->delete();

      return redirect()->route('lista-comentarios')->with('mensagem',"Comentário excluído");

    }
}
