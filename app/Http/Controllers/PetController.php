<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pets;
// use Illuminate\Support\Facades\Validator;


class PetController extends Controller
{

    public function criarUmPet(Request $request)
    {
      $pets = new Pets();
      $pets->nome = $request->nome;
      $pets->especie= $request->especie;
      $pets->genero= $request->genero;
      $pets->data= $request->data;
      $pets->save();
      
    }






//     protected function validator(array $data)
//     {
//         return Validator::make($data, [
//             'especie' => ['required', 'string',],
//             'nome' => ['required', 'string', 'max:255'],
//             'genero' => ['required', 'string'],
//             'data' => ['required', 'date'],
//             'comentarios' => ['required', 'string', 'max:255'],
//         ]);
//     }


// protected function create(array $data)
// {
//     return Pets::create([
//         'especie' => $data['especie'],
//         'nome' => $data['nome'],
//         'genero'=> $data ['genero'],
//         'data'=> $data['data'],
//         'comentarios'=> $data ['comentarios'],
        
//     ]);
// }
// }

}


   