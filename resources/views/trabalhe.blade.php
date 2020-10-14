<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhe Conosco</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/trabalhe.css">
</head>

<body>

<header>
@include('header')
</header>

 <!-- Parte Superior -->
<div class="meioesquerda">
        <h1>Trabalhe na Mundo Pet</h1>
            <p>Veja as vagas que estão abertas em nosso Linkedin, deixe seu currículo em nosso banco de talentos. 
                Assim que surgir uma oportunidade a gente te manda uma mensagem.</p>
            
                <a href="https://www.linkedin.com/"><h2>Ficamos felizes com seu interesse em fazer parte do nosso time.</h2></a>
    </div>

    <div class="meiodireita">
    <img class="img" src="/img/trabalhe.jpg" alt="trabalhe"></img>
</div>


   

<section class="base">
    @include('footer')
</section>


</body>
</html>
