<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ranking de Produtos</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/homeadm.css">
  </head>
<body>

<header>
@include('header')
</header>

            <div class="lista">
                <table class="table">
                <thead class="thead-light">
               
                  <tr>
                    <th scope="col">id</th>
                    <th style="font-size:9px" scope="col">Nome</th>
                    <th scope="col">Tipo Produto</th>
                    <th scope="col">preco</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Raca</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Linha</th>
                    <th scope="col">Tipo Racao</th>
                    <th scope="col">Sabor</th>
                    <th scope="col">Cor</th>
                    <th scope="col">Castrado</th>
                    <th scope="col">Corante</th>
                    <th scope="col">Indicação</th>
                    <th scope="col">Porte</th>
                    <th scope="col">Nota</th>
                    <th scope="col">Comentário</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>

             

                  </tr>
                </thead>
                <tbody>
                  <tr>
                  @foreach ($produtos as $produto)
                    <th scope="row">{{$produto->id}}</th>
                    <td scope="row" style="font-size:9px">{{$produto->nome}}</td>
                    <td scope="row">{{$produto->tipo_produto}}</td>
                    <td scope="row">R$ {{$produto->preco}}</td>
                    <td scope="row">{{$produto->categoria}}</td>
                    <td scope="row">{{$produto->marca}}</td>
                    <td scope="row">{{$produto->raca}}</td>
                    <td scope="row">{{$produto->idade}}</td>
                    <td scope="row">{{$produto->linha}}</td>
                    <td scope="row">{{$produto->tipo_racao}}</td>
                    <td scope="row">{{$produto->sabor}}</td>
                    <td scope="row">{{$produto->cor}}</td>
                    <td scope="row">{{$produto->castrado}}</td>
                    <td scope="row">{{$produto->corante}}</td>
                    <td scope="row">{{$produto->indicacao}}</td>
                    <td scope="row">{{$produto->porte}}</td>
                    <td scope="row">{{$produto->nota}}</td>
                    <td scope="row">{{$produto->comentários}}</td>

                   <td scope="row" style="width:10px"> <a  href="/produto/{{ $produto->id }}">Editar</a> </td>
                   <td scope="row" style="width:10px"> <a  href="/deletarProduto/{{ $produto->id }}">Excluir</a></td> 
                  </tr>
                  @endforeach

                </tbody>
              </table>
              </div>
                  <div class="voltar">
                    <a  onclick="location.href='/adminlog'"> Cadastrar mais Produtos </a>
                  </div>
             <br>

        <section class="base">
              @include('footer')
        </section>
  </body>
</html>
