<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Busca - {{$pesquisa}} - Mundo Pet</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/ranking.css">
  </head>
<body>

<header>
@include('header')
</header>

  <section class="pesquisa">
            <!--Barra de Pesquisa-->
        <nav class="navbar navbar-expand-lg navbar-dark teal lighten-2 mb-4">
        <a class="navbar-brand" href="#" style="margin-left:150px;">Mundo Pet</a>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <form class="form-inline ml-auto" method="get" action="{{url('/pesquisa')}}">
                  <div class="md-form my-0">
                <input class="form-control" style="width:500px; margin-left:120px;" type="search" name="pesquisa" placeholder="Digite aqui o que você quer encontrar (ex.: ração para gatos)"></input>
               <button class="btn btn-light" type="submit">Pesquisar</button>
            </div>
          </form>
      </div>
    </nav>
  </section>

      <div class="produtos" style="margin-left:250px">
                <div class="row">
                  <div class="col-lg-10">
                    <div class="row">
                      <div class="col-lg-10 offset-2" style="margin-top: 20px; margin-bottom: 60px">
                    <h1>Resultados para {{$pesquisa}}</h1>
                    </div>
                    </div>
                    <div class="row">
            @forelse ($produtos as $produto)
                      <div class="col-lg-6 text-center">
                    <img src="{{ asset('storage/img/' . $produto->imagem) }}" class="img-fluid" alt="produto">
                      <h4 style="">{{$produto->nome}}</h4>
                      <p style="">{{$produto->tipo_produto}}</p>
                      <p style="">R$ {{$produto->preco}}</p><br>
                      <a class='btn btn-lg active' style="background-color:rgb(3, 152, 158); color:white; width:200px" href="/produto/{{$produto->id}}">Ver Avaliação</a><br>
                    </div>
                <br>
              @empty
              <div class="col-lg-10">
              <p>Não encontramos nenhum resultado! :(</p>
              <p>Tente novamente</p>
              {{-- incluir links com filtros das categorias               --}}
              </div>
            @endforelse
            </div>
        </div>


</div>
</div>



<br>

<section class="base">
          @include('footer')
    </section>
  </body>
</html>
