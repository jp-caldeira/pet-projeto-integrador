<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <!-- Fonte do google pra entrar no codigo -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/homeadm.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" /> 

</head>

<body>
<header>
@include('header')
</header>

@csrf
@method('POST')
<div class="form">
            @if (session('mensagem'))
                <p class="alert alert-success">{{ session('mensagem') }}</p>
            @endif
                <form action="/produto/{{ $produto->id }}" method="POST">
                     @csrf
                     <div style="margin-top:150px;"><p>Atualize o Produtos</p></div>   
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
                <div class="col-sm-9">
                        <label for="nome" >{{ __('Nome') }}</label></div>
                            <input style="margin-top:10px;" class="form-control" type="text" id="nome" name="nome" value="{{$produto->nome}}" placeholder="Ração Seca PremieR Pet Golden Special Cães Adultos Frango e Carne">
                        <label>{{ __('Tipo de Produto') }}</label>
                    <input style="margin-top:5px;" class="form-control" type="text" name="tipo_produto" value="{{$produto->tipo_produto}}" placeholder="Ração"><br>
               
                <label> Categoria 
                        <select  name="categoria" class="form-control">
                            <option selected disabled   value="{{$produto->categoria}}" >{{ __('Categoria') }}</option>
                                <option value="standard">Standard</option>
                                    <option value="premium ">Premium</option>
                                <option value="superpremium ">Super Premium</option>
                            <option value="semcategoria">Sem Categoria</option>
                        </select>
                    </label> 
                    
                <label> Idade 
                    <select  name="idade" class="form-control">
                        <option selected disabled  value="{{$produto->idade}}">{{ __('Idade') }}</option>
                            <option value="adultos">Adultos</option>
                                <option value="filhote ">Filhote</option>
                            <option value="idoso ">Idoso</option>
                        <option value="naoespecifico">Não Especifico</option>
                    </select></label>

                <label> Tipo Racao 
                    <select  name="tipo_racao" class="form-control" >
                      <option selected disabled  value="{{$produto->tipo_racao}}">{{ __('Tipo Racao') }}</option>
                        <option value="superpremium">Super Premium</option>
                            <option value="premium ">Premium</option>
                                <option value="premiumespecial">Premium Especial</option>
                            <option value="natural">Natural</option>
                        <option value="highpremium">High Premium</option>
                      <option value="naoespecifico">Não Especifico</option>
                </select></label><br>

                <label  for="marca">{{ __('Marca') }}</label>
                    <input class="form-control" type="text" name="marca" value="{{$produto->marca}}" placeholder="Premier">

                    <label  for="raca">{{ __('Raça') }}</label>
                        <input class="form-control" type="text" name="raca" value="{{$produto->raca}}" placeholder="Labrador">

                        <label for="linha">{{ __('Linha') }}</label>
                            <input class="form-control" type="text" name="linha" value="{{$produto->linha}}" placeholder="Golden">                
                        
                            <label for="preco">{{ __('Preço') }}</label>
                            <input class="form-control" type="number" min="0.00" max="10000.00" name="preco" value="{{$produto->preco}}" placeholder="109.90">      
                                
                        <label for="peso">{{ __('Peso') }}</label>
                            <input class="form-control" type="text" name="peso" value="{{$produto->peso}}" placeholder="15kl">
                        
                    <label for="sabor">{{ __('Sabor') }}</label>
                        <input class="form-control" type="text" name="sabor" value="{{$produto->sabor}}" placeholder="Frango">

                <label for="cor">{{ __('Coloração') }}</label>
                    <input class="form-control" type="text" name="cor"  value="{{$produto->cor}}" placeholder="marrom"><br>

                 <label> Castrado
                    <select  name="castrado" class="form-control" style="width:200px;">
                      <option selected disabled value="{{$produto->castrado}}">{{ __('Castrado') }}</option>
                        <option value="simcastrado">Sim</option>
                        <option value="naocastrado ">Não</option>
                      <option value="n/a ">N/a</option>
                </select></label>

                    <label>Corante
                      <select name="corante" class="form-control" style="width:200px;">
                        <option selected disabled value="{{$produto->corante}}">{{ __('Corante') }}</option>
                            <option value="comcorante">Com Corante</option>
                        <option value="semcorante ">Sem Corante</option>
                    </select></label><br>

                    <label> Indicação Veterinaria
                      <select name="indicacao" class="form-control" style="width:200px;">
                        <option selected disabled value="{{$produto->indicacao}}">{{ __('Indicaçao Veterinaria') }}</option>
                            <option value="alergico">Alérgico</option>
                                <option value="doencaintestinal ">Doenças Intestinais</option>
                                <option value="obesidade ">Obesidade</option>
                            <option value="renal ">Renal</option>
                        <option value="sobrepeso ">Soprepeso</option>
                      <option value="naoespecifico">Não Especifico</option>
                    </select></label>

                    <label> Porte
                      <select name="porte" class="form-control" style="width:200px;">
                        <option selected disabled value="{{$produto->porte}}">{{ __('Porte') }}</option>
                            <option value="pequeno">Pequeno</option>
                                <option value="medio">Médio</option>
                                <option value="grande ">Grande</option>
                            <option value="mini">Mini</option>
                        <option value="gigante">Gigante</option>
                      <option value="naoespecifico">Não Especifico</option>
                    </select></label><br>
 
                    <label for="nota">{{ __('Nota') }}</label>
                        <input  name="nota" class="form-control" type="text" value="{{$produto->nota}}" placeholder="Adicionar nota de 1 a 5">
                    
                    <label for="comentários">{{ __('Comentário') }}</label>
                        <textarea name="comentários" class="form-control" value="{{$produto->comentários}}" cols="20" rows="5" placeholder="Gostei muito do produto" class="form-control"></textarea><br>
 

                    <section class="md-form" style="float:left;  margin-left:50px;">
                        <div class="file-field">
                            <a class="btn-floating blue-gradient mt-0 float-right"><i class="far fa-heart" aria-hidden="true"></i>
                                <input type="file" name="imagem" value=""></a>
                                <div class="file-path-wrapper"></div>
                        </div><br>
                        </div>
                    
                            <button class="botao" type="submit">Atualize</button><br>
                            <div class="botaovoltar"> <a onclick="location.href='/lista'"><br>Voltar e não atualizar</a></div>
                        <br>
        </form>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

    <br>
    <section>
            @include('footer')
        </section>

    </body>
  </html>