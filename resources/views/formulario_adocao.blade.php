<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/form_adocao.css">
    @csrf
</head>
<body>


<header>
@include('header')
</header>

    
    <!-- ESPAÇO PARA CADASTRO DE PET PARA ADOÇÃO -->
          <section class="container-cadastro">
          <div class="cadastro">
          <form action="/formulario_adocao" method="post" enctype = "multipart/form-data">
    @csrf
                <h1>Cadastre o Pet para adoção</h1>
                  <label class="nome1" for="nomeCompleto">Nome do Pet</label> <br>
                  <input type="text" name="nome_pet" id="nome_pet"placeholder="Ex Pingo" class="form-control" > 
                  <br>
          </div>
          <div>
                  <label class="especie" for="nomeCompleto">Espécie</label> <br>
                  <input type="text" name="especie" id="especie"placeholder="Ex: cachorro" class="form-control" > 
                  <br>
          </div>
          <div class="row">
            <div class="col-lg-6 col-xs-12">
                  <label for="nomeCompleto">Raça</label> <br>
                  <input type="text" name="raca" id="raca"placeholder="Ex: Pastor Alemão" class="form-control" > 
                  <br>
          </div>
          <div class="col-lg-6 col-xs-12">
                  <label for="nomeCompleto">Porte</label> <br>
                  <input type="text" name="porte" id="porte"placeholder="Ex: Pequeno" class="form-control" > 
                  <br>
            </div>
          </div>  

          <div>
                  <label for="nomeCompleto">Nome Completo do responsável</label> <br>
                  <input type="text" name="nome_responsavel" id="nome_responsavel"placeholder="EX: Maria Da Silva" class="form-control" > 
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
              <label for="fone">Telefone</label> <br>
              <input type="fone" name="fone" id="fone" placeholder="(00)00000-0000 " class="form-control" >
              <br>
            </div>
          </div>

          <div>
          <!--<select name="genero"class="form-control">
                      <option selected disabled>Genero</option>
                      <option value="feminino">Feminino</option>
                      <option value="masculino">Masculino</option>
                      <option value="n/a">N/A</option>
                </select>
              <br>
            </div>
          -->
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
                  <input type="password" name="senhacripto" id="senhacripto" class="form-control">
                  <br>
            </div>   
          </div>
          <div class="caption"> <p>Envie uma foto do Pet</p>
              <input type="file" name="arquivo" value =  " " >
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