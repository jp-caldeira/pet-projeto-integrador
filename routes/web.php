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

Route::get('/homepage', function(){
    return view('homepage');
})->name("homepage");

Route::get('/ranking', function(){
  return view('ranking-produtos');
})->name("ranking");

Route::get('/adocao', function (){
    return view('pag_adocao');
})->name("adote");

Route::get('/cadastro-pet', function(){
    return view('formulario-cadastro-pet');
})->name("cadastropet");

Route::get('/cadastro-user', function(){
  return view('formulario-cadastro-usuario');
})->name("login");

Route::get('/compara-pet', function(){
    return view('projeto');
});


Route::get('/header', function(){
    return view ('header');
})->name("header");

Route::get('/footer', function(){
    return view ('footer');
})->name("footer");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
