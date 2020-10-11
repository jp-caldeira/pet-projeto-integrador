  <div class="box-comment-title">
    <h2>Avaliações</h2>
  </div>

@forelse($comentarios as $comentario)

  <div class="box-body-comment">
      <p>{{$comentario->user->name}}</p>
      <p><strong> Nota: </strong>{{$comentario->nota}}</p>
      <p class="comment-texto">{{$comentario->body}}</p>
    </div>
  <hr></hr>


@empty
  <p>Este produto ainda não tem avaliações!</p>
  <p>Seja o primeiro a opinar sobre este produto</p>
@endforelse
