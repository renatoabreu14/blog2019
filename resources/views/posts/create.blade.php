@extends('layouts.hello')

@section('conteudo')
    <h1>Criar novo post</h1>

    <form action="/posts" method="post">
        @csrf
        <div class="form-group">
            <label for="">Título</label>
            <input type="text" name="titulo" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Descrição</label>
            <textarea name="descricao" id="" cols="30" rows="10"
                      class="form-control"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Salvar" class="btn btn-success">
        </div>
    </form>
@endsection
