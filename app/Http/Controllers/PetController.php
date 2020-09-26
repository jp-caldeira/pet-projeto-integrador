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
      $pets->save();
      
    }


}


   