@csrf
    @method('POST')
<br>

    @if(auth()->check())
    <form action="{{ route('criar.comentario',['id'=>$id]) }}" method="POST" class="form" enctype="multipart/form-data">
        <input type="hidden"  name="_token" value="{{ csrf_token() }}">
            <div class="form-group nota-area">
                <label>{{ __('Nota') }}</label>
                    <input type="text" name="nota" placeholder="Nota de 1 a 5" class="form-control"></div>
                        <div class="form-group coment-area">
                        <label>{{ __('Comentários') }}</label>
                    <textarea name="body" cols="20" rows="5" placeholder="Pros: Adorei o produto. Contras: Acho que poderia ser maior." class="form-control"></textarea>
                </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary mb-4">Enviar</button>
            </div>
    </form>


    @else
    <div class="mensagem">
        <p>Precisa estar logado para fazer os comentários</p>
            <a  href="{{ route('login')}}">Clique aqui para fazer o login</a></div>
        @endif
    </div>
