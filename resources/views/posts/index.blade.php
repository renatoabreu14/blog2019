@extends('layouts.hello')

@section('conteudo')

    <h1>Lista de Posts</h1>

    <div class="text-right">
        <a href="/posts/create" class="btn btn-success">Novo post</a>
    </div>
    <br>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Título</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->titulo}}</td>
                <td>{{$post->descricao}}</td>
                <td>
                    <a href="/posts/{{$post->id}}" class="btn btn-primary">Mostrar</a>
                    <form action="/posts/{{$post->id}}" method="post" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-success">Editar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
