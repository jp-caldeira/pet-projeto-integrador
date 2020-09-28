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
      $pets->save();

      return redirect('/pets');

       
      }

      public function listarPet(){
      $pets = Pets::paginate();

      return view('pets',['pets'=>$pets]);
    }
  //   public function detalhesPet($id){
  //     $pets= Pets:: find($id);
  //     return view('detalhesPet', ["pets"=> $pets]);
      
  // }
  //   public function deletarPet($id){
  //     $pets= Pets::find($id);
  //     $pets->delete();

  //     return redirect()->action("PetController@listarPet");

  // }
    
}
    





   