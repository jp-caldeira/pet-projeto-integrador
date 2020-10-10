<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pets;



class PetController extends Controller
{

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
      $user= auth()->user();
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
    return view('atualizar', ["pets" => $pets]);
   
}

// function atualizarUmPet(Request $request, Pets $pets) {
//   $dataValidate = $request->validate([
//       'especie' => 'String|required',
//       'nome' => 'String|required',
//       'genero' => 'String|required',
//       'nascimento' => 'date|required',
//       'comentarios' => 'String|required',
//       'preferencias' => 'String|required',
//       ]);
      
//       $pets->especie= $dataValidate['especie'];
//       $pets->nome = $dataValidate['nome'];
//       $pets->genero= $dataValidate['genero'];
//       $pets->nascimento= $dataValidate['nascimento'];
//       $pets->comentarios= $dataValidate['comentarios'];
//       $pets->preferencias = implode(',',$dataValidate['preferencias']);
//       $produto->save();

//       return view('/pets');
//   }



public function atualizarUmPet(Request $request,$id)
{
  $pets = Pets::find($id);
  $pets->especie= $request->especie;
  $pets->nome = $request->nome;
  $pets->genero= $request->genero;
  $pets->nascimento= $request->nascimento;
  $pets->comentarios= $request->comentarios;
  $pets->preferencias = implode(',',$request->preferencias);
  $pets->save();
  return view('/listarPet', ["pets" => $pets]);
}
    
  public function __construct()
  {
      $this->middleware('auth');
  }
}
    





   