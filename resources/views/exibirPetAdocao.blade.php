<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pet Adoção - Mundo Pet</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/exibi-adocao.css')}}">
  </head>

    <body>
      <header>
         @include('header')
      </header>
          <div class="titulo">
            <h1>Adote o {{$petAdocao->nome_pet}} ele vai ser seu melhor amigo!</h1>
          </div>
          <div class="exibir">
              <img src="{{ asset('storage/img/' . $petAdocao->imagem) }}" class="img-fluid img-adocao" alt="adocao">
          </div>
          <div class="descricao_exibir">    
              <h1>Nome: {{$petAdocao->nome_pet}}</h1>
              <h4>Raça: {{$petAdocao->raca}}</h4>
              <h4>Porte: {{$petAdocao->porte}}</h4>
              <h4>Descrição: {{$petAdocao->comentario}}</h4> 
              <h4>Responsável pela Adoção: <b> {{$petAdocao->nome_responsavel}} </b></h4>
          </div>
          <div class="link">
              <a href="mailto:{{$petAdocao->email}}?subject=Questions" title="" style="color:rgb(3, 152, 158)">E-mail: {{$petAdocao->email}}</a>
              
          </div>
          <div class="link2">
            <h5>Telefone: {{$petAdocao->fone}}</h5>
              <a href="https://api.whatsapp.com/send?phone={{$petAdocao->fone}}&text=Quero adotar o Pet" target="_blank">
              <img class="whatsapp" src="{!! asset('img/whatsapp.png') !!}"></a>
          </div>          
      
      <section class="base">
          @include('footer')
      </section>
          <br>
    </body>    
</html>
