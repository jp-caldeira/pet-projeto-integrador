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
@include('header')
</header>

    <!-- login -->

    <section class="container-login">
    <div class="login">
    <form action="" method="post" enctype = "multipart/form-data">
         
        <h1>Faça Login </h1>
            <label for="nomeCompleto">Nome Completo</label> <br>
            <input type="text" name="nomeCompleto" id="nomeCompleto"placeholder="Ana Maria Silva" class="form-control" > 
            <br>
          <label for="email">Email</label>
        <br>
        <input type="email" name="email" id="email" placeholder="nome@email.com" class="form-control">
        <br>
            <label for="senha">Senha</label>
            <br>
            <input type="password" name="senha" id="senha"class="form-control">
            <br>
        <button type="submit"class="btn btn-lg btn-block" style='color:white; background-color:rgb(3, 152, 158);'>Entrar</button>

    </div>   
    </form> 
    </section>

    <!-- ESPAÇO PARA CADASTRO DE PESSOA -->
          <section class="container-cadastro">
          <div class="cadastro">
          <form action="" method="post" enctype = "multipart/form-data">

                <h1>Cadastre-se </h1>
                  <label for="nomeCompleto">Nome Completo</label> <br>
                  <input type="text" name="nomeCompleto" id="nomeCompleto"placeholder="Ana Maria Silva" class="form-control" > 
                  <br>
          </div>

          <div>
              <label for="email">Email</label>
              <br>
              <input type="email" name="email" id="email" placeholder="nome@email.com" class="form-control">
              <br>
          </div>

          <div class="row">
            <div class="col-lg-6 col-xs-12">
              <label for="cpf">CPF</label> <br>         
                  <input type="text" name="cpf" id="cpf" 
                  \ pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \
                  title="Digite um CPF no formato: xxx.xxx.xxx-xx" 
                  placeholder="000.000.000-00 " class="form-control" >
              <br>
            </div>

            <div class="col-lg-6 col-xs-12">
              <label for="fone">Celular</label> <br>
              <input type="fone" name="fone" id="fone" placeholder="(00)00000-0000 " class="form-control" >
              <br>
            </div>
          </div>

          <div>
          <select name="genero"class="form-control">
                      <option selected disabled>Genero</option>
                      <option value="feminino">Feminino</option>
                      <option value="masculino">Masculino</option>
                      <option value="n/a">N/A</option>
                </select>
              <br>
            </div>

          <div class="row">
            <div class="col-lg-6  col-xs-12">
                  <label for="senha">Crie uma Senha</label>
                  <br>
                  <input type="password" name="senha" id="senha"class="form-control">
                  <br>
            </div>

            <div class="col-lg-6  col-xs-12">
                  <label for="senhacripto">Confirme sua senha</label>
                  <br>
                  <input type="password" name="senhacripto" class="form-control">
                  <br>
            </div>   
          </div>

          <div class="promo">
              <label for="receberPromocoes"></label>
              <br>
              {{-- <label for="receberPromoções"><input type="checkbox" name="receberPromoções" id="receberPromoções" value="receberPromoções" checked> Quero receber ofertas e promoções exclusivas para meu Pet</label> --}}
              <input type="checkbox" name="receberPromocoes" class="switch-input" value="1" {{ old('Quero receber ofertas e promoções exclusivas para meu Pet') ? 'checked="checked"' : '' }}/>
              <br>
              </div>   
          <div>
              <button type="submit"  class="btn btn-lg btn-block" style='color:white; background-color:rgb(3, 152, 158);'>Cadastrar</button>
          </div>   

      </form>
        <br> 
      </div>
      </div>
      </section>
    <section class="base">
          @include('footer')
    </section>


</body>
</html>
