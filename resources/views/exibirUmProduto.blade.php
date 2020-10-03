<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- Fonte do google pra entrar no codigo -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/produto.css">            
</head>

<body>
<header>
@include('header')
</header>
<div>
  <div class="row">
    <div class="col">
                <img src="{{ asset('storage/img/' . $produtos->imagem) }}" class="img-fluid" alt="produto">                   
           </div></div>

            <div class="a">
                <div class="a">
                    <p>{{$produtos->nome}}</p>
                        <p>{{$produtos->tipo_produto}}</p>
                        <p> {{$produtos->marca}}</p>
                    </div>   </div>                  
                    
                       
                        <div class="preco">
                        <span>Preço R$ {{$produtos->preco}}$</span>
                        <a href="#" class="cart-btn">Disponivel nos seguintes parceiros</a>
                        </div>
                                    

  </div>


        <section>
            @include('footer')
        </section>

    </body>
  </html>
