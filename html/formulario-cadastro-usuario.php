<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">

  <title>Cadastre-se</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="css\formularios.css">
</head>
<body>

<!--
<header>
     
  </header> 

  -->

    <!-- login -->

<section class="container">
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
    <button type="submit"class="btn btn-success btn-lg btn-block">Entrar</button>
</div>   
</div>
</form> 
 

 <!-- ESPAÇO PARA CADASTRO DE PESSOA -->

<section class="container">
<div class="row">
    <div class="col-lg-6  col-xs-12" >
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
    <button type="submit"  class="btn btn-success btn-lg btn-block">Cadastrar</button>
</div>   
</div>
  </form>

</section>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--
<footer>
     
</footer> 

  -->


</body>
</html>
