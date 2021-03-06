<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$produtos->nome}} - Mundo Pet</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/exibir.css') }}">

  </head>

<body>

      <header>
        @include('header')
      </header>

<div class="container" style="margin-top: 8%;">
      <div class="produtos">
        <img src="{{ asset('storage/img/' . $produtos->imagem) }}" class="img-fluid" alt="produto"><br>
        <br>
        <p class="tituloavaliacao" style="width:90%;">Outros clientes já opinaram sobre: </p><br>
              <p class="avaliacao" style="width:80%;">Nota: {{$produtos->nota}}<p>
          <p class="avaliacao" style="width:80%;">Comentário: {{$produtos->comentários}}</p><br>

        <p class="avaliacao" style="width:80%;">Veja o que outros clientes já disseram sobre esse produto e adicione sua opinião</p><br>
    </div>

        <div class="descricao">
            <h1>{{$produtos->nome}}</h1>
                    <p> Tipo de Produto: {{$produtos->tipo_produto}}</p>
                    <p> Categoria: {{$produtos->categoria}}</p>
                    <p>Preço em nossos parceiros: {{$produtos->preco}}</p>
                    <p> Marca: {{$produtos->marca}}</p>
                    <p> Especifico para qual raça:{{$produtos->raca}}</p>
                    <p> Indicado para qual idade: {{$produtos->idade}}</p>
                    <p> Linha: {{$produtos->linha}}</p>
                    <p> Sabor: {{$produtos->sabor}}</p>
                    <p> Tipo de Ração: {{$produtos->tipo_racao}}</p>
                    <p> Indicado para animais castrados: {{$produtos->castrado}}</p>
                    <p> Corante: {{$produtos->corante}}</p>
                    <p> Indicação: {{$produtos->indicacao}}</p>
                    <p> Porte: {{$produtos->porte}}</p>
                    <div class="parceiros">
                    <a href="https://www.petlove.com.br" style="color:white" >Disponivel na Petlove</a><br>
                    <a href="https://www.royalpets.com.br/" style="color:white" >Disponivel na Royal Pets</a><br>
                    <a href="https://www.cobasi.com.br/" style="color:white" >Disponivel na Cobasi</a><br>
                    </div>
                </div>
    </div>

<div class="box-avaliacao">
  @include('box-comments')
</div>


    <div class="caixa">
          @include('comentarios')
        </div>

        <div class="botaofooter" style="font-size:30px; margin-left:60px;">
          <a href="{{ route('ranking') }}">Voltar para o ranking geral</a>
        </div>

    <section>
      @include('footer')
    </section>
    <br>

  </body>
</html>
