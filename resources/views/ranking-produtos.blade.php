<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$titulo}} - Mundo Pet</title>
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
                  <div class="collapse navbar-collapse" id="form-pesquisa">
                      <form class="form-inline ml-auto" method="get" action="{{url('/pesquisa')}}">
                  <div class="md-form my-0">
                <input class="form-control" style="width:500px; margin-left:120px;" type="search" name="pesquisa" placeholder="Digite aqui o que você quer encontrar (ex.: ração para gatos)"></input>
               <button class="btn btn-light" type="submit">Pesquisar</button>
            </div>
          </form>
      </div>
    </nav>
  </section>

<form class="d-flex align-items-end flex-column" action="{{url('/filtrar')}}" method="get" style="margin-left:250px">
  <div class="form-row">
      <select name="pet" class="form-control col-4 mx-1">
        <option selected>Pet</option>
        <option value="cachorro">Cachorro</option>
        <option value="gato">Gato</option>
        <option value="aves">Aves</option>
        <option value="tartaruga">Tartaruga</option>
  </select>
  <select name="produtos" class="form-control col-4 mx-1">
    <option selected>Produtos</option>
    <option value="ração">Ração</option>
    <option value="brinquedo">Brinquedos</option>
    <option value="higiene e bem-estar">Higiene e Bem-Estar</option>
    <option value="remédio">Remédio</option>
  </select>
  <button class="btn active"  style="background-color:rgb(3, 152, 158); color:white;" type="submit">Filtrar</button>
    </div>
</form>

      <div class="produtos" style="margin-left:250px">
                <div class="row">
                  <div class="col-lg-10">
                    <div class="row">
                      <div class="col-lg-8 offset-2" style="margin-top: 20px; margin-bottom: 60px">
                    <h1 class='display-1'>{{$titulo}}</h1>
                    </div>
                    </div>
                    <div class="row">
            @foreach ($produtos as $produto)
                      <div class="col-lg-6 text-center">
                    <img src="{{ asset('storage/img/' . $produto->imagem) }}" class="img-fluid" alt="produto">
                      <h4>{{$produto->nome}}</h4>
                      <p >{{$produto->tipo_produto}}</p>
                      <p >Preço R$ {{$produto->preco}}</p>
                      <a class='btn btn-lg active' style="background-color:rgb(3, 152, 158); color:white; width:200px; margin-bottom: 55px" href="/exibirUmProduto/{{ $produto->id }}">Ver Avaliação</a><br>
                  </div>
                <br>
              <br>
            @endforeach
            </div>
            <div class="row">
              <div class="col-lg-8 offset-lg-3">{{ $produtos->links() }}</div>
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
