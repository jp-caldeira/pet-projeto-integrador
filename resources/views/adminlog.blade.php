<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <!-- Fonte do google pra entrar no codigo -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/homeadm.css">     
    <meta name="csrf-token" content="{{ csrf_token() }}" />       
</head>

<body>
<header>
@include('header')
</header>

@csrf
@method('POST')

    <!-- Paineis administrativos -->
           

        <section class="primeirobloco">
            <br>
            <p style="font-size:15px">Gerencie os comentários e<br> usuários da Plataforma</p>
            <img class="primeiraimg" src="/img/admin.jpg" alt="catiorro trabalhador"><br>
            <p><a href="/lista" class="btn btn-default" role="button">Usuarios</a></p>
            <p><a href="/lista" class="btn btn-default" role="button">Comentários</a></p>

            <br>
        </section>

            <div class="thumbnail"><br>
                        <img class="todos" src="/img/todos.jpg" alt="...">
                        <div class="caption">
                        <p>Todos os produtos</p>
                    <p>Aqui temos acesso ao banco de dados para editar, excluir e visualizar produtos</p><br>
                <p><a href="/lista" class="btn btn-default" role="button">Veja nossos produtos</a></p>
            <br>
            <br>
            </div>
        </div>
        <br>
        <!--Coluna imagens produtos-->
        @method('POST')
            <form action="{{ route('criarUmProduto') }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            

           
            <div class="adm">
            <div class="col-sm-9"><h2 style="font-size:15px">Ola Administrador!</h2>
                    <h2 style="font-size:15px">Aqui geramos o acesso do nosso banco de produtos e moderamos as avaliações da nossa comunidade</h2></div>
                    <div class="col-sm-9"><p>Cadastre Novos Produtos</p></div>
                </div>
            <br>
             
            <div class="form">
            <br>
            <div class="col-sm-9"><label >Nome</label></div>
                        <input style="margin-top:10px;" class="form-control" type="text" name="nome" value="" placeholder="Ração Seca PremieR Pet Golden Special Cães Adultos Frango e Carne">
                    <label>{{ __('Tipo de Produto') }}</label>
                        <input style="margin-top:5px;" class="form-control" type="text" name="tipo_produto" value="" placeholder="Ração"><br>

                    <select name="categoria" class="form-control" >
                        <option selected disabled>{{ __('Categoria') }}</option>
                        <option value="standard">Standard</option>
                        <option value="premium ">Premium</option>
                        <option value="superpremium ">Super Premium</option>
                        <option value="semcategoria">Sem Categoria</option>
                    </select>

                <select name="idade" class="form-control">
                      <option selected disabled>{{ __('Idade') }}</option>
                      <option value="standard">Adultos</option>
                      <option value="premium ">Filhote</option>
                      <option value="superpremium ">Idoso</option>
                      <option value="naoespecifico">Não Especifico</option>

                    </select>

                    <select name="tipo_racao" class="form-control" >
                      <option selected disabled>{{ __('Tipo Racao') }}</option>
                      <option value="superpremium">Super Premium</option>
                      <option value="premium ">Premium</option>
                      <option value="premiumespecial">Premium Especial</option>
                      <option value="natural">Natural</option>
                      <option value="highpremium">High Premium</option>
                      <option value="naoespecifico">Não Especifico</option>

                    </select>
                    <br>

                <label>{{ __('Marca') }}</label>
                    <input class="form-control" type="text" name="marca" value="" placeholder="Premier">

                <label>{{ __('Raça') }}</label>
                    <input class="form-control" type="text" name="raca" value="" placeholder="Labrador">

                <label>{{ __('Linha') }}</label>
                    <input class="form-control" type="text" name="linha" value="" placeholder="Golden">                
                
                <label>{{ __('Preço') }}</label>
                <input class="form-control" type="number" min="0.00" max="10000.00" name="preco" placeholder="109.90">      
                          
                <label>{{ __('Peso') }}</label>
                    <input class="form-control" type="text" name="peso" placeholder="15kl">
                
                <label>{{ __('Sabor') }}</label>
                    <input class="form-control" type="text" name="sabor" placeholder="Frango">

                <label>{{ __('Coloração') }}</label>
                    <input class="form-control" type="text" name="cor" placeholder="marrom"><br>

                    <select name="castrado" class="form-control" style="width:200px; float:left;">
                      <option selected disabled>{{ __('Castrado') }}</option>
                      <option value="simcastrado">Sim</option>
                      <option value="naocastrado ">Não</option>
                      <option value="n/a ">N/a</option>
                      </select>

                      <select name="corante" class="form-control" style="width:200px; float:left;">
                      <option selected disabled>{{ __('Corante') }}</option>
                      <option value="comcorante">Com Corante</option>
                      <option value="semcorante ">Sem Corante</option>
                      </select>

                      <select name="indicacao" class="form-control" style="width:200px; float:left;">
                      <option selected disabled>{{ __('Indicaçao Veterinaria') }}</option>
                      <option value="alergico">Alérgico</option>
                      <option value="doencaintestinal ">Doenças Intestinais</option>
                      <option value="obesidade ">Obesidade</option>
                      <option value="renal ">Renal</option>
                      <option value="sobrepeso ">Soprepeso</option>
                      <option value="naoespecifico">Não Especifico</option>
                      </select>

                      <select name="porte" class="form-control" style="width:200px; margin-left:200px; ">
                      <option selected disabled>{{ __('Porte') }}</option>
                      <option value="pequeno">Pequeno</option>
                      <option value="medio">Médio</option>
                      <option value="grande ">Grande</option>
                      <option value="mini">Mini</option>
                      <option value="gigante">Gigante</option>
                      <option value="naoespecifico">Não Especifico</option>
                      </select><br>
 

                    <section class="md-form" style="float:left;  margin-left:50px;">
                        <div class="file-field">
                            <a class="btn-floating blue-gradient mt-0 float-right">
                                <i class="far fa-heart" aria-hidden="true"></i>
                                <input type="file" name="imagem" value="">
                                </a>
                                <div class="file-path-wrapper">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-sm-9">
                <button type="submit" style="height:40px; width:200px; float:left;" class="botao">Cadastrar</button> 
                </div>
            </form>
        </div>
                </div>

                    @if(isset($resultado))
                        @if($resultado)
                    <h1>Produto Cadastrado com Sucesso</h1>
                        @else
                    <h1>Erro em salvar o produto</h1>
                        @endif
                         @endif
                </div>
</div>
</div>
        <div class="col-lg">
        <section>
            @include('footer')
        </section></div>

    </body>
  </html>
