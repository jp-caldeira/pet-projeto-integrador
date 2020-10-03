
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Fonte do google pra entrar no codigo -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">

    <!-- Styles -->
    <style>
            .container{
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                z-index: 2;
                background-color: white;
                padding:10px;
                
                
            }
         

            html, body{
                font-family: 'Quicksand', sans-serif;


            }
                /*--INICIO PARTE SUPERIOR DO SITE --*/
                /*logo site*/

                .img1 {
                    width: 100px;
                    height: 100px;
                    float: left;
                    margin-left: 50px;
                }
              
                /*parte superior menu*/

                .tablink {
                    color: rgb(7, 95, 98);
                    float: left;
                    border: none;
                    outline: none;
                    cursor: pointer;
                    padding: 10px 10px;
                    font-size: 15px;
                    border-radius: 2px;
                    width: 140px;
                    margin-top: 30px;
                    background-color: rgb(255, 255, 255);
                    font-family: 'Quicksand', sans-serif;
                    text-align: center;

                }
                
                /*parte superior menu apos mouse passar por cima*/

                .tablink:hover {
                    background-color: rgb(3, 152, 158);
                    color: rgb(255, 255, 255);
                    text-decoration:none;
                    cursor:pointer;
                }


                .botoes{
                    float: right;
                }
                .logo{
                   margin-left: 7%; 
                }

                #nome-login{
                    font-family: 'Quicksand', sans-serif;
                    font-size: 15px;
                    color: rgb(105, 112, 112);
                    margin-top:40px;
                    float:right;
                                                           
                }
               
                </style>
</head>

<body>

@extends('layouts.app')
    <!-- Menu superior do site com logo -->

    <section class="container first-section">
    <div class = "logo">
    <a href="{{ route('homepage') }}"><img  class=img1 src="/img/logo1.png" alt="logo"></a>
    <div>
      <div class="botoes">
        <a href="{{ route('homepage') }}" class="tablink"  onclick="openPage('Cadastro', this, 'white')">Nosso site</a>
        <a href="{{ route('ranking') }}" class="tablink"  onclick="openPage('Cadastro', this, 'white')">Ranking</a>
        <a href="{{ route('cadastropet') }}" class="tablink" onclick="openPage('Cadastro', this, 'white')">Cadastro Pet</button></a>
        <a href="{{ route('adote') }}" class="tablink" onclick="openPage('Adote', this, 'white')">Adote!</button></a>
        @guest

        <a href="{{ route('login') }}" class="tablink" onclick="openPage('Adote', this, 'white')">Login</button></a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="tablink" onclick="openPage('Adote', this, 'white')">Registrar-se</button></a>
        @endif
        @else
        </a>
        <a class="tablink" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        
        <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre></a>
            <p id= "nome-login">Ola, {{ Auth::user()->name }}!</p>
            
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            </div>
        </form>
            @endguest


    </section>
</body>
</html>