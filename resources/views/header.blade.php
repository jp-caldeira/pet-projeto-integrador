
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Fonte do google pra entrar no codigo -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/header.css">

</head>

<body>

@extends('layouts.app')
    <!-- Menu superior do site com logo -->

    {{-- <section class="container first-section"> --}}
    <section class="container-fluid">
    <div class = "logo">
    <a href="{{ route('homepage') }}"><img  class=img1 src="/img/logo1.png" alt="logo"></a>
    <div>
      <div class="botoes">
        <a href="{{ route('homepage') }}" class="tablink"  onclick="openPage('Cadastro', this, 'white')">Nosso site</a>
        <a href="{{ route('ranking') }}" class="tablink dropbtn"  onclick="openPage('Cadastro', this, 'white')">Ranking</a>



        {{-- //FORMA ANTERIOR NAO APAGAR// --}}
        {{-- <a href="{{ route('cadastropet') }}" class="tablink" onclick="openPage('Cadastro', this, 'white')">Cadastro Pet</button></a> --}}

 @guest
 @if (Route::has('cadastropet'))
<a href="{{ route('cadastropet') }}" class="tablink" onclick="openPage('Cadastro', this, 'white')">Cadastro Pet</button></a>

 @endif
        @else
        </a>
<a class="tablink" href="{{ route('pets') }}">Meus Pets</a>

@endguest


        <a href="{{ route('adote') }}" class="tablink" onclick="openPage('Adote', this, 'white')">Adote!</button></a>
        @guest

        <a href="{{ route('login') }}" class="tablink" onclick="openPage('Adote', this, 'white')">Entrar</button></a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="tablink" onclick="openPage('Adote', this, 'white')">Cadastre-se</button></a>
        @endif
        @else
        </a>
        <a class="tablink" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>

        <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre></a>

            {{-- <p id= "nome-login">Ola, {{ Auth::user()->name }}!</p> // solução anterior// --}}

            <p id= "nome-login">Olá, {{$names = collect(explode(' ', Auth::user()->name))->slice(0,1)->implode(' ')}}!</p>

        <form id="logout-form" action="{{ route('logout') }}" method="POST">

            @csrf
            </div>
        </form>


            @endguest


    </section>
    
</body>
</html>
