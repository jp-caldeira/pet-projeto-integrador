<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentarios;

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
}
