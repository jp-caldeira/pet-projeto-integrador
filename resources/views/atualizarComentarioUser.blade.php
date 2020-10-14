<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edição de comentário</title>
    <!-- Fonte do google pra entrar no codigo -->

    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/exibir.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>
<body>

<header>
  @include('header')
</header>



<div class="container box-edicao" style="margin-left:10%; margin-top:10%;">
  <div class="container">
  <div class="container col-sm-9" style="margin:1%;" >
        <h1 class=''>Editar Comentário</h1>

         @isset($mensagem)
        <div class="alert alert-warning alert-dismissible col-sm-4" role="alert">
           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <h5>{{ $mensagem }}</h5>
        </div>

       @endisset

  </div>
  <div class="col-sm-9">
    <p style="text-align:left; margin-left:auto;">Produto: <a style="padding: 0%" href="/produto/{{$comentario->produtos_id}}">{{$comentario->produto->nome}}</a></p>
    <p style="text-align:left;  margin-left:auto;">Sua nota: {{$comentario->nota}}</p>
    <p style="text-align:left; margin-left:auto;">Sua avaliação: <em>{{$comentario->body}}</em></p>
  </div>
</div>

<div class="col-sm-9">
  <form action="/atualizar-coments-user" method="POST">
  <hr>
  @csrf
  <div class="col-11">
  <input type="hidden" name="id_comment" value="{{$comentario->id}}">
  <label for="nota">Editar nota do produto (de 1 a 5)</label>
  <input name="nota" class="form-control col-1" value="{{$comentario->nota}}" placeholder="{{$comentario->nota}}" class="form-control"></input><br>
  <label for="comentario">Editar conteúdo do comentário</label>
  <textarea name="comentario" class="form-control" value="{{$comentario->body}}" cols="20" rows="5" placeholder="" class="form-control">{{$comentario->body}}</textarea>
  <br>
  <button class="btn btn-lg btn-primary" type="submit">Atualizar</button>
</form>
  <a href='/coments-user' class="btn btn-secondary">Voltar e não atualizar</a>
  <a class="btn btn-danger" href="/delete-coments-user/{{$comentario->id}}">Deletar</a>
      </hr>
  </div>



@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
