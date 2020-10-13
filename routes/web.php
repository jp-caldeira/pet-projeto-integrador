<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('/homepage');
});

//-------------------------------PAGINAS PRINCIPAIS----------------------//

Route::get('/homepage', function(){
    return view('homepage');
})->name("homepage");

Route::get('/ranking-produtos', 'ProdutoController@exibirTodosProdutos')->name("ranking");

Route::get('/produtos/{id}', 'ProdutoController@exibirUmProduto')->name("produtos");


//Route::get('/produto/categoria/{categoria}/{filtro?}', 'ProdutoController@filtrarCategoria');

//---------------------------------Pagina--adoção----------------------------------------
Route::get('/adocao', 'AdocaoController@listar')->name("adote");

Route::get('/formulario_adocao', function (){
    return view('formulario_adocao');
})->name("cadasto_adocao");

Route::post('/formulario_adocao', 'AdocaoController@cadastrar');

Route::get('/cadastro-pet', function(){
    return view('formulario-cadastro-pet');
})->name("cadastropet");

//Route::get('/listar', 'AdocaoController@listar')->name("listar");


Route::get('/cadastro-user', function(){
  return view('formulario-cadastro-usuario');
})->name("login");

Route::get('/exibirUmProduto/{id}', 'ProdutoController@exibirUmProduto')->name("verproduto");

Route::post('/comentarios/{id}', 'ComentariosController@criarComentario')->name('criar.comentario');

Route::get('/comentarios', function(){
    return view ('comentarios');
})->name("comentarios");

Route::get('/carousel', function(){
    return view ('carousel');
})->name("carousel");


//PAGINAS SOBRE A EMPRESA
Route::get('/sobre', function(){
    return view ('sobre');
})->name("sobre");

Route::get('/perguntas', function(){
    return view ('perguntas');
})->name("perguntas");

Route::get('/lojas', function(){
    return view ('lojas');
})->name("lojas");

Route::get('/trabalhe', function(){
    return view ('trabalhe');
})->name("trabalhe");


//-------------------------------HEADER E FOOTER------------------------------//


Route::get('/header', function(){
    return view ('header');
})->name("header");

Route::get('/footer', function(){
    return view ('footer');
})->name("footer");

//-------------------------------LOGINS----------------------//

Auth::routes();

Route::get('/home','HomeController@index')->name('home');

//-------------------------------PAGINA ADM----------------------//


Route::get('/adminlog', function(){
    return view ('adminlog');
})->middleware('checkAdmin');

// Paginas Produto

// Route::get('/criarUmProduto', function(){
//     return view ('criarUmProduto');
// })->name("criar_produto");


Route::get('/criarUmProduto','ProdutoController@criarUmProduto');
Route::post('/criarUmProduto', 'ProdutoController@criarUmProduto')->name('criarUmProduto');

//lista com todos os produtos para edição e exclusao
Route::get('/lista', 'ProdutoController@exibirTodos')->name("lista");

Route::get('/deletarProduto/{id}', 'ProdutoController@deletarProduto')->name("lista");

//atualizar um produtos//
Route::get('/produto/{id}', 'ProdutoController@editar');
Route::post('/produto/{id}', 'ProdutoController@atualizarUmProduto');

//Comentarios
Route::get('/lista-comentarios', 'ComentariosController@exibirComentarios')->name("lista-comentarios");
Route::get('/deletar-comentario/{id}', 'ComentariosController@deletarComentario');


//-------------------------------CADASTRO PET----------------------//

// Route::get('/detalhesPet/{id}','PetController@detalharPet');

Route::get('/adicionarUmPet','PetController@adicionarUmPet');
Route::post('/adicionarUmPet','PetController@adicionarUmPet')->name('adicionarUmPet');

Route:: get ('/listarPet','PetController@listarPet');
Route:: post ('/listarPet','PetController@listarPet');

Route::get('/deletarPet/{id}','PetController@deletarPet');

Route::get('/pets','PetController@listarPet' )->name("pets");

Route::get('/editarPet/{id}', 'PetController@editarPet');
Route::post('/editarPet/{id}', 'PetController@atualizarUmPet')->name('atualizar');

Route::get('/detalhesPet/{nome}',function($nome){
    return view('detalhesPet', ['pets'=>$nome]);
});

// Route::post('/atualizarUmPet', function(){
//     return view('atualizarUmPet');
// })->name("atualizarPet");

Route::post('/atualizarUmPet','PetController@atualizarUmPet' )->name("atualizarPet");
//------------------------------------------------------------------//



//pesquisa produtos
Route::get('/pesquisa','ProdutoController@pesquisar');
//filtro select
Route::get('/filtrar', 'ProdutoController@filtrar');
