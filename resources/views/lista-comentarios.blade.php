<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de comentários</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/homeadm.css">
  </head>
<body>

<header>
@include('header')
</header>

            <div class="lista-comments">
                <table class="table table-bordered" style="font-size:1vw; margin-top:10%;">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">Comentário</th>
                      <th scope="col">Produto</th>
                      <th scope="col">Id Produto</th>
                      <th scope="col">Usuário</th>
                      <th scope="col">Nota</th>
                      <th scope="col"><a>Excluir</a></th>
                   </tr>
                </thead>
                    <tbody>

                      @foreach ($comentarios as $comentario)
                        <tr>
                          <th scope="row">{{$comentario->id}}</th>
                          <td>{{$comentario->body}}</td>
                          <td><a style="padding: 0px;" href="/produto/{{$comentario->produtos_id}}">{{$comentario->produto->nome}}</a></td>
                          <td>{{$comentario->produtos_id}}</td>
                          <td>{{$comentario->user->name}}</td>
                          <td>{{$comentario->nota}}</td>
                      <td><a href="/deletar-comentario/{{$comentario->id}}">Excluir</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
                </div>
                <div class="file-path-wrapper">
                     <button class="botao" style="margin-left:500px; font-size:13px;"> <a onclick="location.href='/adminlog'"> <br>Voltar para o menu Admin </a></button>
</div>
               <br>
            <section class="base">
                  @include('footer')
            </section>
      </body>
  </html>
