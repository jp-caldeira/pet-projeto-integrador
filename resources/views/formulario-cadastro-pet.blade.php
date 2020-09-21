<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- <link rel= "stylesheet " href= "{{asset('css/app.css')}}" > -->
    <link rel="stylesheet" href="css/form-pet.css">
</head>
<body>

<header>
@include('header')
</header>

<div class= "espacamento"><div>
    <!-- ESPAÇO PARA CADASTRO DO PET -->

<section class="container-pet-form">
<h1>Cadastre o seu Pet </h1> <br>
<div class="form-especie">
  <form method="post" action="{{ route('criarUmPet') }}">
     @csrf

        <select name="especie"class="form-control">
            <option selected disabled>{{ __('Olá, qual a espécie do seu Pet?') }} </option>
            <option value="cachorro">Cachorro</option>
             <option value="gato">Gato</option>
             <option value="passaro">Pássaro</option>
             <option value="roedor">Roedor</option>
             <option value="reptil">Reptil</option>
             <option value="peixe">Peixe</option>
        </select>
</div>
        <div class="form-nome">
        <label for="nome">{{ __('Nome') }}</label> <br>
        <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') }}" placeholder="Snoopy da Silva" required autocomplete="nome" autofocus>
        <div>
        
        <div class="form-genero">
      <label for="genero">{{ __('Genero') }}</label>
            <select name="genero"class="form-control" value="{{ old('genero') }}"required autocomplete="genero">
                      <option selected disabled>{{ __('Selecione') }}</option>
                      <option value="femea">Femea</option>
                      <option value="macho">Macho</option>
                      <option value="n/a">N/A</option>
            </select>
</div>
        
        <div class="form-aniversario">
       <div class="nascimento"> 
                <label for="nascimento">{{ __('Data de Nascimento') }}</label><br>
                <input id="nascimento" type="date"class="form-control" name="nascimento" value="{{ old('nascimento') }}"required autocomplete="nascimento" >
            </div>  
</div>
        <div class = "comentarios">
      <label for="comentarios"></label>
        <br>
        <textarea name="comentarios" class="form-control" rows="6" cols="5" value="{{ old('comentarios') }}"required autocomplete="comentarios" >{{ __('Conte nos um pouco mais sobre o seu Pet') }} </textarea>
        <br>
        </div>
</section>
<br>

<section class="container-pet-foto">
  <div class = "foto">
<div class="row">
      <a href="#" class="thumbnail">
      <img src="img/pet2.png" alt="inserir uma foto do seu Pet" >
    </a>
    </div>
</div>

    <div class="caption" >
      <input type="file" name="arquivo" value =  " " >
      <br>
</div>
</div>
</section>
      <div class="container-pet-preferencias">
      <label for="preferencias">{{ __('Selecione os interesses principais do seu Pet:') }}</label>
    <br>
    <label for="rações"><input type="checkbox" name="preferencias[]" id = "rações" value="rações"> Rações e comidinhas </label>
    <br>
    <label for="petiscos"><input type="checkbox" name="preferencias[]" id = "petiscos" value="petiscos"checked> Petiscos</label>
    <br>
    <label for="brinquedos"><input type="checkbox" name="preferencias[]" id = "brinquedos" value="brinquedos"> Brinquedos</label>
    <br>
    <label for="roupinhas"><input type="checkbox" name="preferencias[]" id = "roupinhas" value="roupinhas"> Roupinhas e acessórios</label>
    <br>
    <label for="indicações"><input type="checkbox" name="preferencias[]" id = "indicações" value="indicações"> Indicações Pet Service </label>
    <br>
    <label for="remedios"><input type="checkbox" name="preferencias[]" id = "remedios" value="remedios"> Remedios </label>
    <br>
<div class="row"> 
    <div class="col-lg-12 col-xs-12">

     <button type="submit"  class="btn btn-lg btn-block" style='color:white; background-color:rgb(3, 152, 158);'> {{ __('Cadastrar') }}</button>
     
</div>   
</div>
</div>
    </form>
    <section class="base">
          @include('footer')
    </section>
</body>
</html>

