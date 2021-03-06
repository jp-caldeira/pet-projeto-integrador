<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pets;



class PetController extends Controller
{
  // public function exibirTodosPets(Request $request)
  // {
  //   $todosPets = Pets::all();
  //   return response()->json($todosPets);
  // }
  // public function exibirUmPet(Request $request,$id)
  // {
  //   $pets = Pets::find($id);
  //   return response()->json($pets);
  // }
  // public function criarUmPet(Request $pets)
  // {
  //   $pets = new Pets();
  //   $pets->nome = $request->nome;
  //   $pets->especie= $request->especie;
  //   $pets->genero= $request->genero;
  //   $pets->nascimento= $request->nascimento;
  //   $pets->save();
  //   return response()->json(['Pet inserido com sucesso!']);
  // }
  // public function atualizarUmPet(Request $request,$id)
  // {
  //   $pets = Pets::find($id);
  //   $pets->nome = $request->nome;
  //   $pets->especie= $request->especie;
  //   $pets->genero= $request->genero;
  //   $pets->nascimento= $request->nascimento;
  //   $pets->save();
  //   return response()->json(['Pet atualizado com sucesso!']);
  // }
  // public function deletarUmPet(Request $request,$id)
  // {
  //   $pets = Pets::find($id);
  //   $pets->delete();
  //   return response()->json(['Pet deletado!']);
  // }

    public function adicionarUmPet(Request $request)

    {
      $pets = new Pets();
      $pets->especie= $request->especie;
      $pets->nome = $request->nome;
      $pets->genero= $request->genero;
      $pets->nascimento= $request->nascimento;
      $pets->comentarios= $request->comentarios;
      $pets->preferencias = implode(',',$request->preferencias);
      $pets->users_id= auth()->user()->id;
      $pets->save();
      if($pets){
      return redirect('/listarPet');
    }else{
      return redirect('cadastropet');
    }

      }

      public function listarPet(){
      $user = auth()->user();
      $pets = $user->pets;
      return view('/listarPet', ["pets" => $pets]);
    }

      public function deletarPet($id){
      $pets= Pets::find($id);
      $pets->delete();

      return redirect()->action("PetController@listarPet");

  }

    function editarPet($id) {
    $pets = Pets::find($id);
    return view('atualizarUmPet', ["pets" => $pets]);

}

function atualizarUmPet(Request $request, $id) {
       $dataValidate = $request->validate([
      'especie' => 'String|required',
      'nome' => 'String|required',
      'genero' => 'String|required',
      'nascimento' => 'date|required',
      'comentarios' => 'String|required',
      'preferencias' => 'required',
      ]);

      $pets = Pets::find($id);
      $pets->especie= $request->especie;
      $pets->nome = $request->nome;
      $pets->genero= $request->genero;
      $pets->nascimento= $request->nascimento;
      $pets->comentarios= $request->comentarios;
      $pets->preferencias = implode(',',$request->preferencias);
      $pets->update();

      return redirect('/listarPet');
  }


  public function __construct()
  {
      $this->middleware('auth');
  }
}
