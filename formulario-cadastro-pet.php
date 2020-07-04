<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">

  <title>Cadastre-se</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>


<section class="container first-section">
    <form action="" method="post" enctype = "multipart/form-data">

      
    <!-- ESPAÇO PARA CADASTRO DO PET -->


    <div class="row">
    <div class="col-lg-6  col-xs-12 ">

      <h1>Cadastre o seu Pet </h1>
        <label for="nomePet">Nome Pet</label> <br>
        <input type="text" name="nomePet" id="nomePet"placeholder="Bidu" class="form-control" > 
        <br>
</div>
</div>
<br>
</div>
    <div class="row">
    <div class="col-lg-6 col-xs-12">
        <select name="genero"class="form-control">
            <option selected disabled>Genero</option>
            <option value="feminino">Feminino</option>
             <option value="masculino">Masculino</option>
        </select>
        <br>
    </div>
</div>

<div class="row">
    <div class="col-lg-6  col-xs-12" >

        <label for="idade">Idade</label> <br>
        <input type="text" name="idade" id="idade"placeholder="12 anos"class="form-control" > 
        <br>
</div>
</div>

<div class="row">
  <div class="col-lg-6 col-xs-12">
    <div class="thumbnail">
      <img src="..." alt="...">
      <label for="comentarios">Comentários</label>
    <br>
    <textarea name="comentarios" class="form-control" rows="5" cols="50">Conte-nos um pouco mais sobre o seu Pet</textarea>
      <div class="caption">
      <input type="file" name="arquivo" value =  " ">
      <br>
      <label for="preferencias">Selecione seus os interesses principais do seu doguinho:</label>
    <br>
    <label for="rações"><input type="checkbox" name="preferencias[]" id = "rações" value="rações">Rações e comidinhas </label>
    <br>
    <label for="petiscos"><input type="checkbox" name="preferencias[]" id = "petiscos" value="petiscos"checked>Petiscos</label>
    <br>
    <label for="brinquedos"><input type="checkbox" name="preferencias[]" id = "brinquedos" value="brinquedos">Brinquedos</label>
    <br>
    <label for="roupinhas"><input type="checkbox" name="preferencias[]" id = "roupinhas" value="roupinhas">Roupinhas e acessórios</label>
    <br>
    <label for="indicações"><input type="checkbox" name="preferencias[]" id = "indicações" value="indicações">Indicações Pet Service </label>
    <br>
    </div>
  </div>
</div>
</div>
<br>
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
</body>
</html>
<?php