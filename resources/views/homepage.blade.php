<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- Fonte do google pra entrar no codigo -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">            
</head>

<body>
<header>
@include('header')
</header>

<div class= "espacamento"><div>
    <!-- Setor direciona ranking -->
<section>
    <div class="tabcontent">
        <img class="img" src="/img/imagem1.png" alt="Gato"></img>
        <p style="width:600px">Produtos que fazem a felicidade do seu pet!</p>
        
        <p style="width:600px">Aqui você encontra uma avaliação justa feita por outros usuários dos produtos para o seu melhor amigo.</p>
        <a  class='btn btn-lg active'  href="{{ route('ranking') }}" >Visite nosso Ranking</a>
    </div>
</section>

    <section>
        <!--Coluna imagens produtos-->
     <div class="ranking">
            <p>Os mimos que seu Pet Ama com os melhores Preços!</p>
                <img src="/img/racoes.png" class="rounded float-left" style="width:165px" alt="imagens racao">
                <img src="/img/camas.png" class="rounded float-left" style="width:165px" alt="imagens camas">
                <img src="/img/remedios.png" class="rounded float-left" style="width:165px" alt="imagens remedios">
                <img src="/img/brinquedos.png" class="rounded float-left" style="width:165px" alt="imagens brinquedos"> 
        
                <button class="botao" style="margin-left:15px">Rações</button>
                <button class="botao" style="margin-left:40px">Camas</button>
                <button class="botao" style="margin-left:70px">Remédios</button>
                <button class="botao" style="margin-left:70px">Brinquedos</button>
    </div> 

   

    </section>

        <section>
            @include('footer')
        </section>

    </body>
  </html>
