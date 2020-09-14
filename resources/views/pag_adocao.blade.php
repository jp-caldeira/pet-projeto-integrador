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
@include('header')
</header>

<div class= "espacamento"><div>

    <!-- ESPAÇO PARA CADASTRO DO PET -->

    <section class="container-pet-form">
    <section>     
        <div class="encontre">
            <b >Encontre aqui seu novo Pet!</b>
        </div>
          <ul>
            <li>
                <a href="#"><div class="text-cachorro"><b>Cadastre-se aqui</b><br>
                  <b>E Divulgue um Pet para adoção! <br> Divulgue de forma responsável!</b></div>
                  <div class="foto-cachorro">
                    <img src="img/cachorro.jpg" alt="cachorro" width="190px" height="200px"/>
                  </div>
                </a>
            </li>
            <div class="pata">
                   <img src="img/pata1.png" width="100px" height="100px"/>
                  </div>
            <li>
                <a href="#"><div class="text-gato"><b>Cadastre-se aqui <br>
                  Para adotar seu novo amigo! <br> A gente te ajuda!</b></div>
                  <div class="foto-gato">
                   <img src="img/gato2.jpg" width="290px" height="180px"/>
                  </div>
                </a>
            </li>
          </ul>
        <form class="form-adocao">
        <label for="inputState"><b>Filtre pelo Pet que você deseja</b></label>
        <select id="inputState" class="form-control">
                <option selected>Espécie</option>
                <option>Cachorro</option>
                <option>Gato</option>
                <option>Passaro</option>
              </select>
            </div>
            <select id="inputState" class="form-control">
                <option selected>Estado</option>
                <option>São Paulo</option>
                <option>Rio De Janeiro</option>
                <option>Minas gerais</option>
              </select><br>
              <div class="busca">
              <button type="submit"class="btn  btn-lg btn-block" style='color:white; background-color: rgb(3, 152, 158);'>Buscar</button></div>
            </div>
          </div>
            </label>
          </div>
        </form>
</div>


<div class="site-content">
        <div class="container titulo-principal">
            <h1 class="adocao">Pets para adoção</h1>
        </div>
        <div class="produtos">
            <div class="row">
              <div class="col-lg-10 offset-lg-1">
                <div class="row">
        <?php foreach($pets as $petsAdocao){?>
                  <div class="col-lg-6">
                    <br>
                        <img src=<?=$petsAdocao['imagem']?> class="img-fluid" alt="produto">
                        <h4><a style="color:rgb(104, 104, 104); margin-right:70px;" href="#"><?=$petsAdocao['nome']?></a></h4>
                        <p><?=$petsAdocao['descrição']?></p>
                        <br>
                        <a class='btn btn-lg' style='color:white; background-color: rgb(3, 152, 158);' href='#'>Adotar</a>
                  </div>
                 
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


