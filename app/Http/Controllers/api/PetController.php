<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pets;

class PetController extends Controller
{
  public function exibirTodosPets(Request $request)
  {
    $todosPets = Pets::all();
    return response()->json($todosPets);
  }
  public function exibirUmPet(Request $request,$id)
  {
    $pets = Pets::find($id);
    return response()->json($pets);
  }
  public function criarUmPet(Request $pets)
  {
    $pets = new Pets();
    $pets->nome = $request->nome;
    $pets->especie= $request->especie;
    $pets->genero= $request->genero;
    $pets->nascimento= $request->nascimento;
    $pets->save();
    return response()->json(['Pet inserido com sucesso!']);
  }
  public function atualizarUmPet(Request $request,$id)
  {
    $pets = Pets::find($id);
    $pets->nome = $request->nome;
    $pets->especie= $request->especie;
    $pets->genero= $request->genero;
    $pets->nascimento= $request->nascimento;
    $pets->save();
    return response()->json(['Pet atualizado com sucesso!']);
  }
  public function deletarUmPet(Request $request,$id)
  {
    $pets = Pets::find($id);
    $pets->delete();
    return response()->json(['Pet deletado!']);
  }
}