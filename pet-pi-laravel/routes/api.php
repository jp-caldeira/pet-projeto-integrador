<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/usuarios','api\UsuarioController@exibirTodosUsuarios');
//retorna um unico usuario//
Route::get('/usuarios/{id}','api\UsuarioController@exibirUmUsuario');
//criar um novo usuario//
Route::post('/usuarios','api\UsuarioController@criarUmUsuario');
//atualizar um usuario//
Route::put('/usuarios/{id}','api\UsuarioController@atualizarUmUsuario');
//deletar um usuario//
Route::delete('/usuarios/{id}','api\UsuarioController@deletarUmUsuario');