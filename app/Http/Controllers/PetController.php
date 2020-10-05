<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pets;


class PetController extends Controller
{

    public function adicionarUmPet(Request $request)
  
    {
      // dd($request);
      $pets = new Pets();
      $pets->especie= $request->especie;
      $pets->nome = $request->nome;
      $pets->genero= $request->genero;
      $pets->nascimento= $request->nascimento;
      $pets->comentarios= $request->comentarios;
      $pets->preferencias = implode(',',$request->preferencias);
      $pets->users_id= auth()->user()->id;
      $pets->save();

      return redirect('/listarPet');

       
      }

      public function listarPet(){
      $pets = Pets::all();
      return view('/listarPet', ["pets" => $pets]);
    }
      
    
  //   public function detalhesPet($id){
  //     $pets= Pets:: find($id);
  //     return view('detalhesPet', ["pets"=> $pets]);
      
  // }
    public function deletarPet($id){
      $pets= Pets::find($id);
      $pets->delete();

      return redirect()->action("PetController@listarPet");

  }
    
  public function __construct()
  {
      $this->middleware('auth');
  }
}
    





   