<?php

$produtos = [
              ["imagem"=> "storage/img/racao1.jpg",
               "nome" => "Ração Magnus para cachorro 2kg",
               "descrição" => "Indicada para cães de grande porte",
               "preço" => "R$ 29,90"
            ],

            ["imagem" => "storage/img/racao2.jpg",
             "nome" => "Ração Magnus para cachorro 2kg",
             "descrição" => "Indicada para cães de grande porte",
             "preço" => "R$ 29,90"
            ],

            ["imagem" => "storage/img/racao3.jpg",
             "nome" => "Ração Magnus para cachorro 2kg",
             "descrição" => "Indicada para cães de grande porte",
             "preço" => "R$ 29,90"
            ],

            ["imagem" => "storage/img/racao4.jpg",
             "nome" => "Ração Magnus para cachorro 2kg",
             "descrição" => "Indicada para cães de grande porte",
             "preço" => "R$ 29,90"
          ],

          ["imagem" => "storage/img/racao5.jpg",
           "nome" => "Ração Magnus para cachorro 2kg",
           "descrição" => "Indicada para cães de grande porte",
           "preço" => "R$ 29,90"
        ],

        ["imagem" => "storage/img/racao6.jpg",
         "nome" => "Ração Magnus para cachorro 2kg",
         "descrição" => "Indicada para cães de grande porte",
         "preço" => "R$ 29,90"
      ],
];
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ranking de Produtos</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{asset('css/app.css')}}>
    <link rel="stylesheet" href={{asset('css/ranking.css')}}>
  </head>
<body>
  <header>
      <nav class="navbar navbar-expand-lg navbar-dark barra-1" style='background-color: #03989e;'>
          <div class='container-fluid cabecalho row'>
              <a class="navbar-brand col-2">Compara Pet</a>
          <form class="barra-pesquisa form-inline col-8">
              <input class="form-control col-lg-7 col-sm-6 ml-lg-0 ml-sm-5" type="search" placeholder="Digite aqui o que você quer encontrar (ex.: ração para gatos)">
              <button class="btn btn-light col-3" type="submit">Pesquisar</button>
          </form>
              <a class="btn btn-dark" href=#>Login</a>
      </div>
    </nav>


  <div class="container-fluid" style='background-color: #03989e;'>
    <nav class="navbar navbar-expand-lg navbar-dark barra-2">
        <div class='container-fluid cabecalho row'>
            <a class="navbar-brand col-8">Compara Pet empresa</a>
            <a class="login-button btn btn-dark" href=#>Login</a>
        </div>
      </nav>
      <nav class="navbar navbar-expand-lg navbar-dark barra-2">
                <div class="col-6 offset-1 mr-0">
                      <input class="form-control" type="search">
                  </div>
                  <div class="col-5 ml-0">
                    <button class="btn btn-light" type="submit">Pesquisar</button>
                  </div>
        </nav>
    </div>
  </header>



<div class="site-content">
        <div class="container titulo-principal">
            <h1 class="display-4">Ranking de Produtos</h1>
        </div>
        <div class="produtos">
            <div class="row">
              <div class="col-lg-10 offset-lg-1">
                <div class="row">
            @foreach($produtos as $produto)
                  <div class="col-lg-6">
                        <img src={{asset($produto['imagem'])}} class="img-fluid" alt="produto">
                        <h4><a href="#">{{$produto['nome']}}</a></h4>
                        <p>{{$produto['descrição']}}</p>
                        <p>{{$produto['preço']}}</p>
                        <a class='btn btn-danger btn-lg' href='#'>Comprar</a>
                  </div>
                  <br>
                  <br>
              @endforeach
                </div>
              </div>
        </div>
      </div>
</div>
      <div class="site-footer">
            <nav class='navbar navbar-expand-lg'>
                <a class="navbar-brand col-lg-2">Compara Pet</a>
              <ul class='navbar-nav offset-lg-6 col-lg-4'>
                  <li class="nav-link mx-2" href="#">
                      Quem Somos
                  </li>
                  <li class="nav-link mx-2" href="#">
                      Contato
                  </li>
                  <li class="nav-link mx-2" href='#'>
                      Cadastre-se
                  </li>
              </ul>
            </nav>
      </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
