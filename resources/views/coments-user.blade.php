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

        @if(session()->has('mensagem'))
      <div class="alert alert-warning alert-dismissible col-6" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="text-center">{{ session('mensagem')}}</h4>
      </div>
      @endif

@forelse($comentarios as $comentario)
      <div class="box-body-comment">
          <p><em>Produto: </em><a href="/exibirUmProduto/{{ $comentario->produto->id}}">{{$comentario->produto->nome}}</a></p>
          <p><em>Sua nota:</em> {{$comentario->nota}}</p>
          <p><em>Sua avaliação:</em> {{$comentario->body}}</p>
            <form action="/edit-coments-user" method="POST" style="margin:0;">
                @csrf
                <input type="hidden" name="id_comment" value="{{$comentario->id}}">
                <button class="btn btn-editar" type="submit">Editar</button>
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

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
