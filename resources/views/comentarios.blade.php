<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=oi, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/comentarios.css') }}">
 
    <meta name="csrf-token" content="{{ csrf_token() }}" /> 
</head>
<body>
@csrf
    @method('POST')

    <hr>
    @if(auth()->check())
    <form action="{{ route('criar.comentario') }}" method="POST" class="form" enctype="multipart/form-data">
    <input type="hidden"  name="_token" value="{{ csrf_token() }}">
            
    <div class="form-group">
    <label>{{ __('Nota') }}</label>

        <input type="text" name="nota" placeholder="Nota de 1 a 5" class="form-control">
        </div>
        <div class="form-group">
        <label>{{ __('Comentários') }}</label>

            <textarea name="body" cols="20" rows="5" placeholder="Gostei muito do produto" class="form-control"></textarea>
            </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</hr>

    @else
    <div class="mensagem">
    <p>Precisa estar logado para fazer os comentários</p>
    <a  href="{{ route('login')}}">Clique aqui para fazer o login</a></div>
    @endif

    <!-- <div class="avaliacao">
          <p>Veja o que outros clientes ja disseram sobre esse produto</p>
          <p>Nota: {{$produtos->nota}}<p>
            <p>Comentário: {{$produtos->comentario}}</p>  <br> -->
</div>

</body>
</html>