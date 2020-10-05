<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComentariosController extends Controller
{
    public function criarComentario(Request $request)
    {
        $comentario = $request->user()->comentarios()->create($request->all());

        return redirect()
            ->route('verproduto', ['id'=> $comentario->produto_id])
            ->withSucess('Comentário realizado com sucesso!');
    }
}
