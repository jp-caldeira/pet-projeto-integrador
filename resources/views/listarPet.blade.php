
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

<section class = "imagem">
<img class="img" src="/img/pet2.png" alt="Gato"></img>
<p id="texto">Os mimos que seu Pet Ama com as melhores Avaliações!</p>

<br>
        
</section>

<div class= "espacamento">
</div>

@forelse($pets as $pets)
{{-- -----------------quando a pessoa tem pets cadastrados------------------ --}}
<section class="container-listagem">
<h2> Seus Pets,  {{$names = collect(explode(' ', Auth::user()->name))->slice(0,1)->implode(' ')}} </h2>
<br>
<table class="lista">
<li> Nome: {{$pets ['nome']}} <a id=edicoes href="/deletarPet/{{$pets->id}}">Deletar</a> <a id=edicoes href="/editarPet/{{$pets->id}}">Editar</a> </li>
<li> Especie: {{$pets ['especie']}} </li>

<hr> 
</table>
<a id="finalizar" href="/ranking-produtos">Finalizar</a> <a id="inserir" href="/cadastro-pet">Inserir outro Pet</a> 
@empty
{{-- -----------------quando a pessoa NÂO tem pets cadastrados no site------------------ --}}
<section class="container-listagem">
<h2> Olá,  {{$names = collect(explode(' ', Auth::user()->name))->slice(0,1)->implode(' ')}} </h2>

<br>
<table class="lista">
         <h3>Gostariamos de conhecer os seus Pets!</h3> <br></h4>Cadastre-os agora para receber as melhores indicações de produtos e avaliações de consumidores como você.</h4><hr>
     </table>
     <a id=edicoes href="/ranking-produtos">Ir para Ranking</a><a id=edicoes href="/cadastro-pet">Adicionar Pet</a> 
@endforelse
 
</section>

</div>
    <section class="base-listagem">
          @include('footer')
    </section>
</body>
</html>