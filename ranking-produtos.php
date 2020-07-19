<?php

$produtos = [
              ["imagem"=> "img/racao1.jpg",
               "nome" => "Ração Magnus para cachorro 2kg",
               "descrição" => "Indicada para cães de grande porte",
               "preço" => "R$ 29,90"
            ],

            ["imagem" => "img/racao2.jpg",
             "nome" => "Ração Magnus para cachorro 2kg",
             "descrição" => "Indicada para cães de grande porte",
             "preço" => "R$ 29,90"
            ],

            ["imagem" => "img/racao3.jpg",
             "nome" => "Ração Magnus para cachorro 2kg",
             "descrição" => "Indicada para cães de grande porte",
             "preço" => "R$ 29,90"
            ],

            ["imagem" => "img/racao4.jpg",
             "nome" => "Ração Magnus para cachorro 2kg",
             "descrição" => "Indicada para cães de grande porte",
             "preço" => "R$ 29,90"
          ],

          ["imagem" => "img/racao5.jpg",
           "nome" => "Ração Magnus para cachorro 2kg",
           "descrição" => "Indicada para cães de grande porte",
           "preço" => "R$ 29,90"
        ],

        ["imagem" => "img/racao6.jpg",
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css\ranking.css">
  </head>
<body>
  <header>
      <nav class="navbar navbar-expand-lg navbar-dark barra-1" style='background-color: #03989e;'>
          <div class='container-fluid cabecalho row'>
              <a class="navbar-brand col-2">Logo empresa</a>
          <form class="barra-pesquisa form-inline col-8">
              <input class="form-control col-lg-8 col-sm-6 ml-lg-0 mr-1 ml-sm-5" type="search" placeholder="Digite aqui o que você quer encontrar (ex.: ração para gatos)">
              <button class="btn btn-light col-2 col-sm-3" type="submit">Pesquisar</button>
          </form>
              <a class="btn btn-dark" href=#>Login</a>
      </div>
    </nav>

<!-- barra tela menor -->
    <nav class="navbar navbar-expand-lg navbar-dark barra-2" style='background-color: #03989e;'>
        <div class='container-fluid cabecalho row'>
            <a class="navbar-brand col-8">Logo empresa</a>
            <a class="login-button btn btn-dark" href=#>Login</a>
        </div>
      </nav>
      <nav class="navbar navbar-expand-lg navbar-dark barra-2" style='background-color: #03989e;'>
        <div class="container-fluid cabecalho row">
                <div class="col-8">
                      <input class="form-control" type="search">
                  </div>
                  <div class="col">
                    <button class="btn btn-light" type="submit">Pesquisar</button>
                  </div>
              </div>
        </div>
    </nav>

  </header>





<div class="site-content">
        <div class="container titulo-principal">
            <h1 class="display-4">Ranking de Produtos</h1>
        </div>
        <div class="produtos">
            <div class="row">
              <div class="col-lg-10 offset-lg-1">
                <div class="row">
        <?php foreach($produtos as $produto){?>
                  <div class="col-lg-6">
                        <img src=<?=$produto['imagem']?> class="img-fluid" alt="produto">
                        <h4><a href="#"><?=$produto['nome']?></a></h4>
                        <p><?=$produto['descrição']?></p>
                        <p><?=$produto['preço']?></p>
                        <a class='btn btn-danger btn-lg' href='#'>Comprar</a>
                  </div>
                  <br>
                  <br>
              <?php } ?>
                </div>
              </div>
        </div>
      </div>
</div>
      <div class="site-footer">
            <nav class='navbar navbar-expand-lg'>
                <a class="navbar-brand col-lg-2">Logo da empresa aqui</a>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
