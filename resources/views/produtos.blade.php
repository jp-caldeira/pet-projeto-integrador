<?php

$produtos = [
              
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
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/ranking.css">
  </head>
<body>
<header>
@include('header')
</header>

  <section>
      <nav class="navbar navbar-expand-lg navbar-dark barra-1" style='background-color: #03989e;'>
          <div class='container-fluid cabecalho row'>
              <a class="navbar-brand col-2" style="margin-left:110px"> Mundo Pet</a>
          <form class="barra-pesquisa form-inline col-8">
              <input class="form-control col-lg-7 col-sm-6 ml-lg-0 ml-sm-5" type="search" placeholder="Digite aqui o que você quer encontrar (ex.: ração para gatos)">
              <button class="btn btn-light col-3" type="submit">Pesquisar</button>
          </form>
      </div>
    </nav>
    </div>
  </section>





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
                        <br>
                        <br>
                  </div>
                  <br>
                  <br>
              <?php } ?>
                </div>
              </div>
        </div>
      </div>
</div>
<section class="base">
          @include('footer')
    </section>
  </body>
</html>
