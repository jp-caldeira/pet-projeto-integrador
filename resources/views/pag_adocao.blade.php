<?php

//$pets = [
//              ["imagem"=> "img/adocao1.jpg",
//               "nome" => "Cesar",
//               "descrição" => "Tem 1 aninho, é muito sapeca e feliz",
//            ],
//
//            ["imagem" => "img/adocao2.jpg",
//             "nome" => "Julinho",
//             "descrição" => "Tem 5 meses, é muito carente e brincalhão",
//            ],
//
//            ["imagem" => "img/adocao3.jpg",
//             "nome" => "Estella",
//             "descrição" => "Muito educada e obediente",
//            ],
//
//            ["imagem" => "img/adocao4.jpg",
//             "nome" => "Damares",
//             "descrição" => "Linda e muito sapeca",
//          ],
//
//          ["imagem" => "img/adocao5.jpg",
//           "nome" => "Didi",
//           "descrição" => "Muito esperto e brincalhão",
//        ],
//
//        ["imagem" => "img/adocao6.jpg",
//         "nome" => "Bob",
//         "descrição" => "Muito atrapalhado e adora brincar",
//      ],
//];
//
 ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Adoção - Mundo-PET</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/adocao.css">
</head>
<body>

<header>
@include('header')
</header>


    <!-- ESPAÇO PARA CADASTRO DO PET -->
    <section class="container-pet-form">
    <section>     
        <div class="encontre" style="margin-left:350px">
            <b>Encontre aqui seu novo Pet!</b><br>
        </div>
      <div class="bloco1">
          <ul>
            <li>
            <div class="text-cachorro">
              <br>
                  <div class="link2">
                  <a href='/formulario_adocao' style="color:rgb(3, 152, 158)">Cadastre-se aqui<br></a>
                  </div>
                  E Divulgue um Pet para adoção! <br> Divulgue de forma responsável!</div>
                  <div class="foto-cachorro">
                    <img src="img/cachorro.jpg" alt="cachorro" width="190px" height="200px"/>
                  </div>
                
            </li>
            <div class="pata">
                   <img src="img/pata1.png" width="100px" height="100px"/>
                  </div>
            <li>
              
                <div class="text-gato">
                <br>
                    <div class="link1">
                    <a href='register' style="color:rgb(3, 152, 158)"> 
                    Cadastre-se aqui <br></a>
                    </div>
                 Para adotar seu novo amigo! <br> A gente te ajuda!
                </div>
                
                      <div class="foto-gato">
                    <img src="img/gato2.jpg" width="290px" height="180px"/>
                  </div>
            </li>
          </ul>
      </div>
<!-- FORMULARIO DE PESQUISA -->

    <form class="form-adocao" action="/filtrar_adocao" method="GET">
      <br>

        <label for="inputState"><b>Filtre pelo Pet que você deseja</b></label>
        <select id="inputState" class="form-control" name="especie">
                <option selected disabled>Espécie</option>
                <option>Cachorro</option>
                <option>Gato</option>
                <option>Passaro</option>
              </select>
            </div>

              <div class="busca">
              <button type="submit"class="btn  btn-lg btn-block" style='color:white; background-color: rgb(3, 152, 158);'>Buscar</button></div>
            </div>
              </div> 
            </label>
          </div>
        </form>
    </div>
<!-- EXPOSIÇÃO ANIMAIS PARA ADOÇÃO -->
        <div class="animais">
            <div class="row">
              <div class="col-lg-10 offset-lg-1">
                <div class="row">
          @forelse ($listarAdocao as $petsAdocao)  
                  <div class="col-lg-6">
                    <br>
                    <img src="{{ asset('storage/img/' . $petsAdocao->imagem) }}" class="img-fluid img-adocao" alt="adocao">
                        <p><b>{{$petsAdocao->nome_pet}}</b></p>
                        <p>{{$petsAdocao->comentario}}</p>
                        <br>
                        <a class='btn btn-lg' style='color:white; background-color: rgb(3, 152, 158);' href='/exibirPetAdocao/{{$petsAdocao->id}}'>Adotar</a>
                  </div>
            @empty
            <div> Não Temos essa epécie para adoção</div>
            @endforelse
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
