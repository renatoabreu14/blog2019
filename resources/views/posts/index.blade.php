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
                    <a href="/posts/{{$post->id}}" class="btn btn-primary">
                        Mostrar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
