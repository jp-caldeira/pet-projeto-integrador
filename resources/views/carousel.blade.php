<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carousel</title>
    <!-- Fonte do google pra entrar no codigo -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/carousel.css') }}">
  </head>


<body>
<div style="margin-top:20px;">

<div style="float:right">
<div class="hero-image" style="width:300px"><img style="width:250px; margin-left:40px;" src="/img/racoes.png" alt="Rações">
  <div class="hero-text" style="margin-left:300px;">
    <h1 style="font-size:30px">Rações</h1>
    <p class="texto">Enchendo o buchinho com qualidade</p>
    <button>
      <a href="{{url('/filtrar?pet=Pet&produtos=ração')}}">Veja qual é a melhor</a>
    </button>
  </div>
</div>
</div>


<div class="hero-image" style="width:300px"><img style="width:250px; margin-left:300px" src="/img/brinquedos.png" alt="brinquedos">
  <div class="hero-text">
    <h1 style="font-size:30px">Brinquedos</h1>
    <p class="texto">Varinhas, bolinhas e diversão!</p>
    <button>
      <a href="{{url('/filtrar?pet=Pet&produtos=brinquedo')}}">Fogo no parquinho</a>
    </button>
  </div>
</div>



<div style="float:right">
<div class="hero-image" style="width:300px"><img style="width:250px; margin-left:40px;" src="/img/remedios.png" alt="Rações">
  <div class="hero-text" style="margin-left:300px;">
    <h1 style="font-size:30px">Remédios</h1>
    <p class="texto">Bom saber o que é o melhor pra quem a gente ama né?</p>
    <button>
      <a href="{{url('/filtrar?pet=Pet&produtos=remédio')}}">Os mais recomendados</a>
    </button>
  </div>
</div>
</div>


<div class="hero-image" style="width:300px"><img  style="width:250px; margin-left:300px" src="/img/camas.png" alt="brinquedos">
  <div class="hero-text">
    <h1 style="font-size:30px">Camas</h1>
    <p class="texto">Conforto, Praticidade e Pelúcias</p>
    <button>
      <a href="{{url('/filtrar?pet=Pet&produtos=higiene+e+bem-estar')}}">Temos!</a>
    </button>
  </div>
</div>
</div>



  <br>
  <br>

</div>






</body>
</html>
