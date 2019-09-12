@extends('layouts.hello')

@section('conteudo')
    <h1>Visualição de Post</h1>

    <div class="text-left">
        <h2>Título:</h2>
        {{$post->titulo}}
        <h2>Descrição:</h2>
        {{$post->descricao}}
    </div>
@endsection
