<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adocao;

class AdocaoController extends Controller
{
    public function cadastrar(Request $request){
        
        $adocao = new Adocao();
        dd($request);
    }
}
