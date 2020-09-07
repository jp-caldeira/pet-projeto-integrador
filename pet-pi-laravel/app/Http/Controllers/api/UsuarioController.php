<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsuarioController extends Controller

{
  public function exibirTodosUsuarios(Request $request)
  {
    $todosUsuarios = User::all();
    return response()->json($todosUsuarios);
  }
  public function exibirUmUsuario(Request $request,$id)
  {
    $usuario = User::find($id);
    return response()->json($usuario);
  }
  public function criarUmUsuario(Request $request)
  {
    $usuario = new User();
    $usuario->name = $request->name;
    $usuario->email= $request->email;
    $usuario->password= Hash::make($request->password);
    // $usuario->phone = $request->phone;
    // $usuario->genero = $request->genero;
    // $usuario->cpf = $request->cpf;
    $usuario->save();
    return response()->json(['Usuario criado com sucesso!']);
  }
  public function atualizarUmUsuario(Request $request,$id)
  {
    $usuario = User::find($id);
    $usuario->name = $request->name;
    $usuario->email= $request->email;
    $usuario->password= Hash::make($request->password);
    // $usuario->phone = $request->phone;
    // $usuario->genero = $request->genero;
    // $usuario->cpf = $request->cpf;
    $usuario->save();
    return response()->json(['Usuario atualizado com sucesso!']);
  }
  public function deletarUmUsuario(Request $request,$id)
  {
    $usuario = User::find($id);
    $usuario->delete();
    return response()->json(['Usuario deletado!']);
  }
}
