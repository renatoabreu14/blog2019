<form action="{{route("comments.store")}}" method="post">
    @csrf
    <textarea name="comentario" id="" cols="30" rows="10" class="form-control"></textarea>
    <input type="hidden" name="post_id" value="{{$post->id}}">
    <input type="submit" value="Comentar" class="btn btn-success">
</form>
