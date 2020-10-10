<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- <link rel= "stylesheet " href= "{{asset('css/app.css')}}" > -->
     <link rel="stylesheet" href="/css/form-pet.css">
   
</head>
<body>

<header>
@include('header')
</header>

<div class= "espacamento">
</div>

  <section class = "titulo">
<nav class="navbar navbar-expand-lg navbar-dark teal lighten-2 mb-4">
<h1>{{ __('Ops, atualize os dados do seu Pet') }}</h1>
</nav>
</section>
<hr>

@if(isset($errors)&& count($errors)>0)
<div class= "text-center mt-4 mb-4 p-2" alert-danger>
@foreach ($errors->all() as $erro)
{{$erro}}>
@endforeach
</div>
@endif
    

<section class="container-pet-form">
<div class="form-especie">
  <form method="post" action="{{ route('atualizarPet') }}">
    
     @csrf



<p>{{ __('Olá, qual a espécie do seu Pet?') }}</p> <br>
<label for="especie" required autocomplete value= "{{$pets->especie}}"></label>
<input type="radio" name="especie" id="cachorro" value="cachorro" required autocomplete><label for="cachorro"></label>
<input type="radio" name="especie" id="gato" value="gato"><label for="gato"></label>
<input type="radio" name="especie" id="passaro" value= "passaro"><label for="passaro"></label>
<input type="radio" name="especie" id="roedor" value= "roedor"><label for="roedor"></label>
<input type="radio" name="especie" id="reptil" value= "reptil"><label for="reptil"></label>
<input type="radio" name="especie" id="peixe" value= "peixe"><label for="peixe"></label> 
</div>
</section>

<br>
<section class="container-pet-dados">
<div class="form-nome">
<br>
  <label for="nome">{{ __('Nome') }}</label> <br>
  <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{$pets->nome}}"  placeholder="Snoopy da Silva" required autocomplete="nome" autofocus>
</div>
        
<div class="form-genero">
  <label for="genero">{{ __('Genero') }}</label>
    <select name="genero"class="form-control" required autocomplete="genero">
      <option selected disabled>Selecione</option>
      <option value="femea">Femea</option>
      <option value="macho">Macho</option>
      <option value="n/a">N/A</option>
    </select>
</div>      

<div class="nascimento"> 
     <label for="nascimento">{{ __('Data de Nascimento') }}</label><br>
    <input id="nascimento" type="date"class="form-control" name="nascimento" value="{{$pets->nascimento}}"required autocomplete="nascimento" >
</div>  

        <div class = "comentarios">
      <label for="comentarios">{{ __('Comentarios') }}</label>
        
        <textarea id="comentarios" name="comentarios" class="form-control" placeholder="Conte-me mais" ></textarea>
        <br>
        </div>
     
<br>

</section>

<section class="container-pet-preferencias">
    <label for="preferencias">{{ __('Selecione os interesses principais do seu Pet:') }}</label>
    <br>
    <label class="checkbox-inline" for="racoes">
    <input type="checkbox" name="preferencias[]" id = "racoes" value="racoes"> Rações e comidinhas </label>
    <label class="checkbox-inline" for="petiscos">
    <input type="checkbox" name="preferencias[]" id = "petiscos" value="petiscos"checked> Petiscos</label>
    <label class="checkbox-inline" for="brinquedos">
    <input type="checkbox" name="preferencias[]" id = "brinquedos" value="brinquedos"> Brinquedos</label><br>
    <label class="checkbox-inline" for="roupinhas">
    <input type="checkbox" name="preferencias[]" id = "roupinhas" value="roupinhas"> Roupinhas e acessórios</label>
    <label class="checkbox-inline" for="indicações">
    <input type="checkbox" name="preferencias[]" id = "indicações" value="indicações"> Indicações Pet Service </label><br>
    <label class="checkbox-inline" for="remedios">
    <input type="checkbox" name="preferencias[]" id = "remedios" value="remedios"> Remedios </label>
    <br>

    
    </section>

<section class="container-botao">
     <button type="submit"  class="btn btn-lg btn-block" style='color:white; background-color:rgb(3, 152, 158);'> {{ __('Atualizar') }}</button>
     
</section>
    </form>
    <section class="base">
          @include('footer')
    </section>
</body>
</html>

