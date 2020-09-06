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

Route::get('/home', function(){
    return view('home');
});

Route::get('/ranking', function(){
  return view('ranking-produtos');
});

Route::get('/adocao', function (){
    return view('pag_adocao');
}
);

Route::get('/cadastro-pet', function(){
    return view('formulario-cadastro-pet');
});

Route::get('/cadastro-user', function(){
  return view('formulario-cadastro-usuario');
});

Route::get('/compara-pet', function(){
    return view('projeto');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
