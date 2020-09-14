<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- <link rel= "stylesheet " href= "{{asset('css/app.css')}}" > -->
    <link rel="stylesheet" href="css/form.css">
</head>
<body>

<header>
@include('header')
</header>

<div class= "espacamento"><div>

<form method="POST" action="{{ route('register') }}">
     @csrf


     <section class="container-cadastro">
          <div class="cadastro">


          <h1>Cadastre-se </h1><br>
            <label for="nomeCompleto">{{ __('Nome Completo') }}</label> <br>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    
            <label for="email">{{ __('E-mail') }}</label>
            <br>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        


            <label for="fone">{{ __('Telefone') }}</label> <br>
            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
           
             <label for="genero">{{ __('Genero') }}</label>
            <select name="genero"class="form-control" value="{{ old('genero') }}"required autocomplete="genero">
                      <option selected disabled>{{ __('Selecione') }}</option>
                      <option value="feminino">Feminino</option>
                      <option value="masculino">Masculino</option>
                      <option value="n/a">N/A</option>
            </select>

            <div class="cpf">        
              <label for="cpf">{{ __('CPF') }}</label> <br>         
              <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}"required autocomplete="cpf" >
             </div>

             <div class="data"> 
                <label for="nascimento">{{ __('Data de Nascimento') }}</label><br>
                <input id="nascimento" type="date"class="form-control" name="nascimento" value="{{ old('nascimento') }}"required autocomplete="nascimento" >
            </div>
            
            <div class="senha">
                    <label for="password">{{ __('Senha') }}</label>
                    <br>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
               

                <div class="senhaConfirma">
                
                    <label for="password-confirm">{{ __('Confirme sua senha') }}</label>
                    <br>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    <br>
                </div>
                
            
            
            {{-- <div class="promo">
              <label for="receberPromocoes"></label>
              <br>
              <label for="receberPromocoes"><input type="checkbox" name="receberPromocoes" id="receberPromocoes" value="receberPromocoes" checked> Quero receber ofertas e promoções exclusivas para meu Pet</label>
              <br>
            </div>    --}}
          
              
            <div>
                <button type="submit"  class="btn btn-lg btn-block" style='color:white; background-color:rgb(3, 152, 158);'> {{ __('Cadastrar') }}</button>
            </div>   

            </form>
             </section>
</div>
 </div> 
    
    </section>
        <section class="base">
            @include('footer')
        </section>


    </body>
</html>

