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

//rotas usuarios//

Route::get('/usuarios','api\UsuarioController@exibirTodosUsuarios');
//retorna um unico usuario//
Route::get('/usuarios/{id}','api\UsuarioController@exibirUmUsuario');
//criar um novo usuario//
Route::post('/usuarios','api\UsuarioController@criarUmUsuario');
//atualizar um usuario//
Route::put('/usuarios/{id}','api\UsuarioController@atualizarUmUsuario');
//deletar um usuario//
Route::delete('/usuarios/{id}','api\UsuarioController@deletarUmUsuario');


//rotas pets//
Route::get('/pets','api\PetController@exibirTodosPets');
//retorna um unico usuario//
Route::get('pets/{id}','api\PetController@exibirUmPet');
//criar um novo usuario//
Route::post('/pets','api\PetController@criarUmPet');
//atualizar um usuario//
Route::put('/pets/{id}','api\PetController@atualizarUmPet');
//deletar um usuario//
Route::delete('/pets/{id}','api\PetController@deletarUmPet');


//rotas produtos//
Route::get('/produtos','api\ProdutoController@exibirTodosProdutos');
//retorna um unico produtos//
Route::get('produtos/{id}','api\ProdutoController@exibirUmProduto');
//criar um novo produtos//
Route::post('/produtos','api\ProdutoController@criarUmProduto');
//atualizar um produtos//
Route::put('/produtos/{id}','api\ProdutoController@atualizarUmProduto');
//deletar um produtos//
Route::delete('/produtos/{id}','api\ProdutoController@deletarUmProduto');
