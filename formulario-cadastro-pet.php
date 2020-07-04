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


    <h1>Cadastre seu Pet</h1>
    <label for="nomePet">Nome Completo</label> <br>
    <input type="text" name="nomePet" id="nomePet" class="form-control" >


    <label for="arquivo">Escolha uma foto</label>
    <br>
      <input type="file" name="arquivo" value =  " ">
      <br>
    <button type="submit"  class="btn btn-primary">Enviar</button>
<button type="reset" class="btn btn-default">Limpar campos</button>

    </form>
  </section>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
<?php