<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/form.css">
</head>
<body>


<header>
<nav class="container-fluid">
<div class="row">
    <div class="col-lg-12 col-xs-12">
        <button class="tablinka">Compara Pet!</button>
        <button class="tablink" onclick="openPage('Adote', this, 'white')">Adote!</button>
        <button class="tablink" onclick="openPage('Cadastro', this, 'white')">Cadastro do Seu Pet</button>
        <button class="tablink" onclick="openPage('Ranking', this, 'white')" id="defaultOpen">Ranking de Produtos</button>
        <button class="tablink" onclick="openPage('Home', this, 'white')">Nosso site</button>
        </div>
</div>
</nav>
</header>

    <!-- login -->

<section class="container">
<div class="login">
<div class="row">
    <div class="col-lg-6  col-xs-12" >
<form action="" method="post" enctype = "multipart/form-data">
      <h1>Faça Login </h1>
        <label for="nomeCompleto">Nome Completo</label> <br>
        <input type="text" name="nomeCompleto" id="nomeCompleto"placeholder="Ana Maria Silva" class="form-control" > 
        <br>
</div>
</div>

<div class="row">
    <div class="col-lg-6 col-xs-12">
       <label for="email">Email</label>
    <br>
    <input type="email" name="email" id="email" placeholder="nome@email.com" class="form-control">
    <br>
    </div>
    </div>

    <div class="row">
   <div class="col-lg-6  col-xs-12">
        <label for="senha">Senha</label>
        <br>
        <input type="password" name="senha" id="senha"class="form-control">
        <br>
   </div>
   </div>

<div class="row"> 
    <div class="col-lg-6 col-xs-12">
    <button type="submit"class="btn btn-success btn-lg btn-block" style='background-color: #03989e;'>Entrar</button>
</div>   
</div>
</div>
</form> 
</section>

 <!-- ESPAÇO PARA CADASTRO DE PESSOA -->
<section class="container">
<div class="cadastro">
<div class="row">
    <div class="col-lg-6 col-xs-12" >
<form action="" method="post" enctype = "multipart/form-data">
      <h1>Cadastre-se </h1>
        <label for="nomeCompleto">Nome Completo</label> <br>
        <input type="text" name="nomeCompleto" id="nomeCompleto"placeholder="Ana Maria Silva" class="form-control" > 
        <br>
</div>
</div>

<div class="row">
    <div class="col-lg-6 col-xs-12">
       <label for="email">Email</label>
    <br>
    <input type="email" name="email" id="email" placeholder="nome@email.com" class="form-control">
    <br>
    </div>
    </div>

<div class="row">
  <div class="col-lg-3 col-xs-12">
    <label for="cpf">CPF</label> <br>         
        <input type="text" name="cpf" id="cpf" 
        \ pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \
         title="Digite um CPF no formato: xxx.xxx.xxx-xx" 
         placeholder="000.000.000-00 " class="form-control" >
    <br>
  </div>
  <div class="col-lg-3 col-xs-12">
    <label for="fone">Celular</label> <br>
    <input type="fone" name="fone" id="fone" placeholder="(00)00000-0000 " class="form-control" >
    <br>
  </div>
</div>

<div class="row">
    <div class="col-lg-6 col-xs-12">
        <select name="genero"class="form-control">
            <option selected disabled>Genero</option>
            <option value="feminino">Feminino</option>
             <option value="masculino">Masculino</option>
             <option value="n/a">N/A</option>
        </select>
        <br>
    </div>
</div>

<div class="row">
   <div class="col-lg-3  col-xs-12">
        <label for="senha">Crie uma Senha</label>
        <br>
        <input type="password" name="senha" id="senha"class="form-control">
        <br>
   </div>
        <div class="col-lg-3  col-xs-12">
        <label for="senhacripto">Confirme sua senha</label>
        <br>
        <input type="password" name="senhacripto" class="form-control">
        <br>
   </div>   
</div>
<div class="row"> 
    <div class="col-lg-6 col-xs-12">
    <label for="receberPromoções"></label>
    <br>
    <label for="receberPromoções"><input type="checkbox" name="receberPromoções" id="receberPromoções" value="receberPromoções" checked>Quero receber ofertas e promoções exclusivas para meu Pet</label>
    <br>
    </div>   
</div>
<div class="row"> 
    <div class="col-lg-6 col-xs-12">
    <button type="submit"  class="btn btn-success btn-lg btn-block" style='background-color: #03989e;'>Cadastrar</button>
</div>   
</div>
</div>
  </form>
</section>


 

<footer>    
<section class="container"> 
<div class="row"> 
<div class="col-lg-6 col-xs-12">
            <h4>O que você Procura?</h4>
            <img class="itensa" src="tipopet.png">
            <img class="itensa" src="tiporação.png" alt="botaoraçao">
            <img class="itensa" src="brinquedo.png" alt="botaobrinquedo">
            <img class="itensa" src="tipoace.png" alt="botaoace">
            <img class="itensa" src="tiporemedio.png" alt="botaoremedio">
            <br>
            <h5>Cães </h5>
            <h5>Ração</h5>
            <h5>Brinquedos</h5>
            <h5>Acessórios</h5>
            <h5>Remédios</h5>
  </div>   
  </div>
 <div class="row"> 
 <div class="col-lg-6 col-xs-12">
      <h6>Aqui você pode realizar a busca de acordo com o Perfil do seu Pet!</h6>
  </div>
  </div>

</footer> 



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>
