<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Avaliações</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/exibir.css') }}">
  </head>
<body>

<section>
@include('header')
</section>

<div style="margin-top:10%;">
<div class="box-avaliacao">
  <div class="box-comment-title">
    <h2>Suas avaliações, {{$names = collect(explode(' ', Auth::user()->name))->slice(0,1)->implode(' ')}}</h2>
  </div>
@forelse($comentarios as $comentario)
  <div class="box-body-comment">
      <p><em>Produto: </em><a href="/exibirUmProduto/{{ $comentario->produto->id}}">{{$comentario->produto->nome}}</a></p>
      <p><em>Sua nota:</em> {{$comentario->nota}}</p>
      <p><em>Sua avaliação:</em> {{$comentario->body}}</p>
      <form action="/edit-coments-user" method="POST">
        @csrf
        <input type="hidden" name="id_comment" value="{{$comentario->id}}">
        <button type="submit">Editar</button>
      </form>
    </div>
  <hr></hr>
@empty
  <p>Você ainda não avaliou nenhum produto!</p>
  <p>Dê sua opinião nos produtos que seu pet adora (ou não) e fortaleça nossa comunidade</p>
@endforelse
</div>
<div class="container" style="margin-left:15%; margin-top:2%; margin-bottom: 3%;">
    <a type="button" class="btn btn-lg" href="/pets" style="background-color: rgb(3, 152, 158); color: white;">Voltar para Meus Pets</a>
</div>
  </body>
</html>
