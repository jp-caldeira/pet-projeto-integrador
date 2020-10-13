<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de comentários</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="css/homeadm.css">
  </head>
<body>

  <div class="container" style="margin-left:10%; margin-top:2%;">
  <a type="button" class="btn btn-lg" onclick="location.href='/adminlog'" style="background-color: rgb(3, 152, 158); color: white;">Menu Admin</a>
  <a type="button" href='/lista' class="btn btn-lg" style="background-color: rgb(3, 152, 158); color: white;">Lista de Produtos</a>
</div>

   @if(session()->has('mensagem'))
     <div class="text-center alert alert-warning alert-dismissible fade show" style="width:80%; margin-left:10%; margin-top:2%;" role="alert">
       <h4>{{ session('mensagem')}}</h4>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
@endif

          <div class="container" style="margin-top:3%;">
            <h1 class="text-center" style="margin-bottom: 5%;">Lista de Comentários</h1>
                <table class="table table-bordered" style="font-size:1vw; background-color:white;">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">Comentário</th>
                      <th scope="col">Produto</th>
                      <th scope="col">Id Produto</th>
                      <th scope="col">Usuário</th>
                      <th scope="col">Nota</th>
                      <th scope="col">Editar</th>
                      <th scope="col">Excluir</th>
                   </tr>
                </thead>
                    <tbody>

                      @foreach ($comentarios as $comentario)
                        <tr>
                          <th scope="row">{{$comentario->id}}</th>
                          <td style="width:20%;">{{$comentario->body}}</td>
                          <td style="width:20%;"><a style="padding: 0%" href="/produto/{{$comentario->produtos_id}}">{{$comentario->produto->nome}}</a></td>
                          <td>{{$comentario->produtos_id}}</td>
                          <td>{{$comentario->user->name}}</td>
                          <td>{{$comentario->nota}}</td>
                          <td><a style="padding: 0%" href="/editar-comentario/{{$comentario->id}}">Editar</a></td>
                      <td><a style="padding: 0%" href="/deletar-comentario/{{$comentario->id}}">Excluir</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
                </div>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      </body>
  </html>
