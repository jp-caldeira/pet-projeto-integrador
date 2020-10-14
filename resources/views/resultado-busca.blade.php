<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Busca - {{$pesquisa}} - Mundo Pet</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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

      <div class="produtos" style="margin-left:15%">
                <div class="row">
                  <div class="col-lg-10">
                    <div class="row">
                      <div class="col-lg-10" style="margin-top: 5%; margin-bottom: 5%; margin-left:15%;">
                    <h1>Resultados para {{$pesquisa}}</h1>
                    </div>
                    </div>
                    <div class="row">
            @forelse ($produtos as $produto)
                      <div class="col-lg-6 text-center">
                    <img src="{{ asset('storage/img/' . $produto->imagem) }}" class="img-fluid img-ranking" alt="produto">
                      <h4 style="">{{$produto->nome}}</h4>
                      <p style="">{{$produto->tipo_produto}}</p>
                      <h4>R$ {{$produto->preco}}</h4>
                      <a class='btn btn-lg active' style="background-color:rgb(3, 152, 158); color:white; width:200px; margin-bottom: 55px" href="/exibirUmProduto/{{$produto->id}}">Ver Avaliação</a><br>
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


      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


  </body>
</html>
