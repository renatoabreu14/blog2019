<h2>Comentários</h2>
@foreach($post->comments as $comment)
    <h6>{{$comment->comentario}}</h6>
@endforeach
