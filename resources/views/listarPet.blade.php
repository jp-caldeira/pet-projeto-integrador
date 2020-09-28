
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

<h1> Listagem dos seus Pets </h1>


{{-- <ul>
@forelse($pets as $pets)
<li>{{$pets->nome}} <a href="/detalhesPet/{{$pets->id}}">Ver detalhes</a>
<a href="/deletarPet/{{$pets->id}}">Deletar Pet</a>
</li>
@empty
<p>Não há Pets </p>
@endforelse




 --}}





    <section class="base">
          @include('footer')
    </section>
</body>
</html>