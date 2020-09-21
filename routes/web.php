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

Route::get('/', function () {
    return view('welcome');
});

//Paginas Principais

Route::get('/homepage', function(){
    return view('homepage');
})->name("homepage");

Route::get('/ranking-produtos', 'ProdutoController@exibirTodosProdutos')->name("ranking");


Route::get('/produtos/{id}', 'ProdutoController@exibirUmProduto')->name("produtos");

Route::get('/adocao', function (){
    return view('pag_adocao');
})->name("adote");

Route::get('/cadastro-pet', function(){
    return view('formulario-cadastro-pet');
})->name("cadastropet");

Route::get('/cadastro-user', function(){
  return view('formulario-cadastro-usuario');
})->name("login");

//Route::get('/compara-pet', function(){
    //return view('projeto');
//});

//Paginas Header e Footer


Route::get('/header', function(){
    return view ('header');
})->name("header");

Route::get('/footer', function(){
    return view ('footer');
})->name("footer");

Auth::routes();

Route::get('/home','HomeController@index')->name('home');

//Paginas Adm

Route::get('/headeradm', function(){
    return view ('headeradm');
})->name("headeradm");

Route::get('/adminlog', function(){
    return view ('adminlog');
})->middleware('checkAdmin');

//Paginas Produto

Route::get('/criarUmProduto', function(){
    return view ('criarUmProduto');
})->name("criar_produto");


Route::get('/criarUmProduto','ProdutoController@criarUmProduto');
Route::post('/criarUmProduto', 'ProdutoController@criarUmProduto')->name('criarUmProduto');

//cadastro pet//
Route::get('/criarUmPet','PetController@criarUmPet');
Route::post('/criarUmPet','PetController@criarUmPet')->name('criarUmPet');