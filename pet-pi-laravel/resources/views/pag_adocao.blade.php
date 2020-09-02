<?php

$pets = [
              ["imagem"=> "img/adocao1.jpg",
               "nome" => "Cesar",
               "descrição" => "Tem 1 aninho, é muito sapeca e feliz",
            ],

            ["imagem" => "img/adocao2.jpg",
             "nome" => "Julinho",
             "descrição" => "Tem 5 meses, é muito carente e brincalhão",
            ],

            ["imagem" => "img/adocao3.jpg",
             "nome" => "Estella",
             "descrição" => "Muito educada e obediente",
            ],

            ["imagem" => "img/adocao4.jpg",
             "nome" => "Damares",
             "descrição" => "Linda e muito sapeca",
          ],

          ["imagem" => "img/adocao5.jpg",
           "nome" => "Didi",
           "descrição" => "Muito esperto e brincalhão",
        ],

        ["imagem" => "img/adocao6.jpg",
         "nome" => "Bob",
         "descrição" => "Muito atrapalhado e adora brincar",
      ],
];

 ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/adocao.css">
</head>
<body>


<header>
<nav class="container-fluid">
<div class="row">
    <div class="col-lg-12 col-xs-12">
    
    <img class=img1 src="logo1.png" alt="Gato">
        <button class="tablink" onclick="openPage('Adote', this, 'white')">Login</button>
        <button class="tablink" onclick="openPage('Adote', this, 'white')">Adote!</button>
        <button class="tablink" onclick="openPage('Cadastro', this, 'white')">Cadastro do Seu Pet</button>
        <button class="tablink" onclick="openPage('Ranking', this, 'white')" id="defaultOpen">Ranking de Produtos</button>
        <button class="tablink" onclick="openPage('Home', this, 'white')">Nosso site</button>
        </div>
</div>
</nav>
</header>

    <!-- ESPAÇO PARA CADASTRO DO PET -->

    <section class="container-pet-form">
    <div class="text-cadastro" style="color: rgb(0, 0, 0);"><h1><B>Encontre aqui seu novo Pet!</B></h1></div>
          <ul>
            <li>
                <a href="#"><div class="text-cachorro"><b>Cadastre-se aqui</b><br>
                  <b>E Divulgue um Pet para adoção! <br> Divulgue de forma responsável!</b></div>
                  <div class="foto-cachorro"><span><img src="img/cachorro.jpg" alt="cachorro" width="190px" height="200px"/></span></div></a>
            </li>
            <li>
                <a href="#"><div class="text-gato"><b>Cadastre-se aqui <br>
                  Para adotar seu novo amigo! <br> A gente te ajuda!</b></div>
                  <div class="foto-gato"><span><img src="img/gato2.jpg" alt="Gato" width="290px" height="180px"/></span></div></a>
            </li>
          </ul>
          <form action="">
            <div class="form-group col-md-4">
              <label for="inputState"><b>Filtre pelo Pet que você deseja</b></label>
              <select id="inputState" class="form-control">
                <option selected>Espécie</option>
                <option>Cachorro</option>
                <option>Gato</option>
                <option>Passaro</option>
              </select>
            </div>
            <div class="form-group2 col-md-4">
              <select id="inputState" class="form-control">
                <option selected>Estado</option>
                <option>São Paulo</option>
                <option>Rio De Janeiro</option>
                <option>Minas gerais</option>
              </select>
              <button type="submit"class="btn btn-success btn-lg btn-block" style='background-color: rgb(7, 95, 98);'>Buscar</button>
            </div>
          </form>
      
          

      </section>

      <div class="container-itens"> 
          <div class="row"> 
          <div class="col-lg-6 col-xs-12">
            <h4>Encontre o que você precisa de acordo com o seu Pet</h4>
            <img class="itensa" src="tipopet.png">
            <img class="itensa" src="tiporação.png" alt="botaoraçao">
            <img class="itensa" src="brinquedo.png" alt="botaobrinquedo">
            <img class="itensa" src="tipoace.png" alt="botaoace">
            <img class="itensa" src="tiporemedio.png" alt="botaoremedio">
            <br>
            <h5>Cães </h5>
            <h5>Ração</h5>
            <h5>Brinquedos</h5>
            <h5>Acessórios</h5>
            <h5>Remédios</h5>
  </div>   
  </div>
  <img class=img src="imagem.png" alt="Gato">
</div>
<br>

<div class="site-content">
        <div class="container titulo-principal">
            <h1 class="display-4">Pets para adoção</h1>
        </div>
        <div class="produtos">
            <div class="row">
              <div class="col-lg-10 offset-lg-1">
                <div class="row">
        <?php foreach($pets as $petsAdocao){?>
                  <div class="col-lg-6">
                        <img src=<?=$petsAdocao['imagem']?> class="img-fluid" alt="produto">
                        <h4><a href="#"><?=$petsAdocao['nome']?></a></h4>
                        <p><?=$petsAdocao['descrição']?></p>
                        <a class='btn btn-success btn-lg' style='background-color: rgb(7, 95, 98);' href='#'>Adotar</a>
                  </div>
                  <br>
                  <br>
              <?php } ?>
                </div>
              </div>
        </div>
      </div>
</div>

  <footer>    
    <div class="contato"> 
      <ul>
        <li>
          <a href="#"> Entre em contato</a>
        </li>
      </ul>
      <div class="ajuda"> 
      <ul>
        <li>
          <a href="#"> Precisa de ajuda?</a>
        </li>
      </ul>
      <div class="dica"> 
      <ul>
        <li>
          <a href="#"> Aceita uma dica?</a>
        </li>
      </ul>
      <div class="politica"> 
      <ul>
        <li>
        O uso deste site está sujeito aos termos e condições do Termo de Uso e Política de privacidade.
        </li>
      </ul>
</footer>    


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>


