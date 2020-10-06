<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exibir</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/exibir.css') }}">

  </head>

<body>
    
      <header>
        @include('header')
      </header>

      <div class="produtos">
        <img src="{{ asset('storage/img/' . $produtos->imagem) }}" class="img-fluid" alt="produto">
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
                    </div>
                </div>
              </div><br>
            </div>


      <div class="caixa">
        @include('comentarios')
      </div>

        <div class="avaliacao" style="color:white">
          <p style="text-align:center">Veja o que outros clientes ja disseram sobre esse produto e adicione sua opinião</p><br>
            <p>Nota: {{$produtos->nota}}<p>
              <p>Comentário: {{$produtos->comentario}}</p><br>
          </div><br>

        <div class="botaofooter">
        <a class='btn btn-lg' style="color: rgb(3, 152, 158);" href="{{ route('ranking') }}">Voltar para o raking geral</a>
        </div>
    

    <section class="base">
      @include('footer')
    </section>
    <br>

  </body>
</html>
