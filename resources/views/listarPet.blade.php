
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

<div class= "espacamento">
</div>
<section class="container-listagem">
<h2> Seus Pets,  {{$names = collect(explode(' ', Auth::user()->name))->slice(0,1)->implode(' ')}} </h2>
{{-- <h2> Seus Pets,</h2> --}}
<br>
<table class="lista">
@foreach($pets as $pets)
<li> Nome: {{$pets ['nome']}} <a id=edicoes href="/deletarPet/{{$pets->id}}">Deletar</a> <a id=edicoes href="/editarPet/{{$pets->id}}">Editar</a> </li>
<li> Especie: {{$pets ['especie']}} </li>
{{-- <li> Cliente: {{$pets->user->name}} </li> --}}
<hr> 
</table>
@endforeach
 <a id="finalizar" href="/ranking-produtos">Finalizar</a> <a id="inserir" href="/cadastro-pet">Inserir outro Pet</a> 
 


</section>
    <section class="base">
          @include('footer')
    </section>
</body>
</html>