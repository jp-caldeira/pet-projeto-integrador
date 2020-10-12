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
        $comentario->users_id= auth()->user()->id;
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

    public function deletarComentario($id)
    {
      $comentario = Comentarios::find($id);
      $comentario->delete();

      return redirect()->action("ComentariosController@exibirComentarios");
    }
}
