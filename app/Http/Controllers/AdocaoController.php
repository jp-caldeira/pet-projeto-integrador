<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adocao;

class AdocaoController extends Controller
{
    //public function cadastrar(Request $request){

        //$adocao = new Adocao();
        //dd($request);
    //}
//}

    public function cadastrar(Request $request){

        if ($request->isMethod('GET')){
        return view ('pag_adocao');
        }

    $adocao = new Adocao();
    //dd($request);
    $adocao->nome_pet = $request->nome_pet;
    $adocao->especie = $request->especie;
    $adocao->raca = $request->raca;
    $adocao->porte = $request->porte;
    $adocao->nome_responsavel = $request->nome_responsavel;
    $adocao->email = $request->email;
    $adocao->cpf = $request->cpf;
    $adocao->fone = $request->fone;
    $adocao->senha = $request->senha;
    $adocao->senha = $request->senha;
    $adocao->comentario = $request->comentario;
    //$adocao->senhacripto = $request->senhacripto;

    if($request->hasfile('imagem')){
        // $file = $request->file('imagem');
        // $extension = $file->extension(); //getting image extension
        $filename = date('YmdGisu'). $request->imagem->getClientOriginalName();
        // $file->move("public/img" , $filename);
        $request->imagem->storeAs("public/img", $filename);
        $adocao->imagem = $filename;
      }else{
        $adocao->imagem = "sem-imagem.jpg";
      }

        $resultado = $adocao->save();
        return redirect () -> route('adote');
}

    public function listar() {
        $listarAdocao = Adocao::all();        
        return view('pag_adocao', ["listarAdocao" => $listarAdocao]);
    }
}
