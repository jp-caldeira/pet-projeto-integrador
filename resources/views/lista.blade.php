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

            <div class="formulario">
</div>
                <table class="table">
                <thead class="thead-dark">
               
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
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
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                  @foreach ($produtos as $produto)
                    <th scope="row">{{$produto->id}}</th>
                    <td>{{$produto->nome}}</td>
                    <td>{{$produto->tipo_produto}}</td>
                    <td>R$ {{$produto->preco}}</td>
                    <td>{{$produto->categoria}}</td>
                    <td>{{$produto->marca}}</td>
                    <td>{{$produto->raca}}</td>
                    <td>{{$produto->idade}}</td>
                    <td>{{$produto->linha}}</td>
                    <td>{{$produto->tipo_racao}}</td>
                    <td>{{$produto->sabor}}</td>
                    <td>{{$produto->cor}}</td>
                    <td>{{$produto->castrado}}</td>
                    <td>{{$produto->corante}}</td>
                    <td>{{$produto->indicacao}}</td>
                    <td>{{$produto->porte}}</td>
                  <td><button style="width:50px">Editar</button></td>
                  <td><button style="width:50px">Excluir</button></td>


                  </tr>
                  @endforeach

                </tbody>
              </table>

             




<section class="base">
          @include('footer')
    </section>
  </body>
</html>
