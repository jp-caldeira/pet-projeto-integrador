<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sobre.css">
</head>

<body>

<header>
@include('header')
</header>

 <!-- Parte Superior -->
<div class="meioesquerda">
        <h1>Avalie na Mundo Pet</h1>
            <p>A Mundo Pet é um site onde você encontra as melhores avaliações para os produtos que trazem a felicidade do seu pet.
                São opiniões de outros clientes que como você querem ter suas expectativas alcançadas com suas compras.</p>
        <button class="botao" href="#" role="button">Cadastre-se e Avalie</button>

        <h2 style="width:400px; margin-left:150px;">Ainda com dúvidas? Confira em nossas <a href="#" style="width:400px; margin-right:70px;">"Perguntas Frequentes"</h2></a>
    </div>

    <div class="meiodireita">
        <img class="imgav" src="/img/avaliacao.jpg" alt="Gato"></img>
</div>



 <!-- Parte Meio -->
<div class="meioesquerda" style="margin-top:10px">
        <img class="imgav" src="/img/cupom.jpg" alt="cupom"></img>
    </div>
    
    <div class="meiodireita" style="margin-top:10px">
            <h1>Descontos em Compras!</h1>
            <p>A cada avaliação você ganha pontos que podem ser utilizado em nossos parceiros.
            Assim você consegue comprar o produto que já viu que vale a pena
            com um preço exclusivo para a nossa comunidade</p>
</div>
   



<!-- PARCEIROS -->
<div class="meioesquerda" style="margin-top:30px;">
        <h1>Nossos parceiros</h1>
        <p>Com tantas opções, às vezes fica difícil escolher, né? Não com a gente!
        Cadastre seu pet e indicaremos os itens mais bem avaliados de acordo com o cadastro </p>
        <p>✔INFORMAÇÕES COMPLETAS</p>
        <p>✔ANÁLISE DE PRODUTOS</p>
        <p>✔AVALIAÇÕES DE OUTROS USUÁRIOS</p>
        <p>Todos os itens avaliados estão disponiveis para compra em nossos parceiros com cupom de desconto adquirido após suas 5 Avaliações.</p>
        </div>

    <div class="meiodireita" style="margin-top:30px;">
        <img class="imgp" src="/img/parceiros.jpg" alt="Parceiros"></img>
</div>


   

<section class="base">
    @include('footer')
</section>


</body>
</html>
