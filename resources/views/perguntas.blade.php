
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perguntas Frequentes</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel= "stylesheet " href= "{{asset('css/trabalhe.css')}}" >
</head>


<body>
    <header>
        @include('header')
    </header>

<!-- 
<div class="perguntas">
    <div class="panel panel-default">
        <div class="panel-heading">O QUE É O MUNDO PET GARANTE?</div>
            <div class="panel-body">
            A Mundo Pet Garante é um serviço gratuito de controle de qualidade, 
            que dá todo o suporte necessário e resolve problemas sobre a reputação dos produtos.
            Se a loja não cumprir o prazo de entrega, a gente resolve. Você recebe sua compra ou seu dinheiro de volta até R$5.000.
            Sem pagar nada extra e sem letras miúdas.
        </div>
    </div>
<br> -->

  
<div class="perguntas">

    <h2>Dúvidas Frequentes</h2>

    <p>Reunimos algumas perguntas que podem te ajudar a ter uma melhor experiência em nosso site!</p>
    <button type="button" class="collapsible">O que é a MUNDO PET?</button>
<div class="content">
        <p>A Mundo Pet Garante é um serviço gratuito de controle de qualidade, 
            que dá todo o suporte necessário e resolve problemas sobre a reputação dos produtos.
            Tem dúvidas se o produto é confiavel? Talvez algum cliente ja tenha respondido.
            Comprou e não gostou? Aqui você pode explicar por que o produto não atendeu suas expectativas.
        </p>
</div>

<button type="button" class="collapsible">Por que devo cadastrar meu Pet?</button>
<div class="content">
  <p>Cadastrando seu pet você passa a receber novos comentários sobre os produtos de interesse dele. Como petiscos, rações e brinquedos de acordo com a sua espécie dele.
      Assim você passa a receber organicamente por e-mail avaliações de novos produtos, evitando compras desnecessárias que podem te decepcionar.
  </p>
</div>
<button type="button" class="collapsible">Preciso pagar para utilizar a Mundo Pet?</button>
<div class="content">
  <p>Não. O a Mundo Pet é um serviço totalmente gratuito.</p>
</div>
<button type="button" class="collapsible">Critiquei um produto, posso ter problema?</button>
<div class="content">
  <p>Todos os comentários sobre os produtos são moderados, todo cliente tem direito a expor sua insatisfação. Mas ainda assim caso a opinião
      do usuario possa causar problema para ele mesmo, sinalizamos para que uma edição no comentário seja realizada.

  A fim de evitar excessos, o correto é se limitar a expor a situação que gerou a reclamação, narrando os fatos de forma respeitosa, 
  nos limites necessários a demonstrar a indignação.

  Mesmo o consumidor tendo razão em sua reclamação, este não pode ir além do direito de exprimir a sua opinião, 
  ou seja, não pode ultrapassar o direito à livre manifestação do pensamento previsto no art. 5º, 
  IV da Constituição Federal, sob pena de cometer um ilícito civil previsto no art. 186 do Código Civil.</p>

 <p> <i>Art. 186. Aquele que, por ação ou omissão voluntária, negligência ou imprudência, 
violar direito e causar dano a outrem, ainda que exclusivamente moral, comete ato ilícito. </i></p>
</div>
</div>
</div>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>




<section class="base">
                @include('footer')
            </section>
</div>
</body>
</html>