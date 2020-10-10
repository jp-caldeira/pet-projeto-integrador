<div class="box-comment" style="width:70%;">
  <h2>Avaliações</h2>
@forelse($comentarios as $comentario)

    <p>{{$comentario->body}}</p>
     <p>{{$comentario->nota}}</p>
     <p>{{$comentario->user->name}}</p>
@empty
  <p>Este produto ainda não tem avaliações!</p>
  <p>Seja o primeiro a opinar sobre este produto</p>
@endforelse
</div>
