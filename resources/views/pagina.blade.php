@extends('layouts.hello')

@section('conteudo')
    <h1>Página cabeceira do 6 período</h1>
    <h2>Hello
    @isset($nome)
        {{$nome}}
    @endisset
    @isset($sobrenome)
        {{$sobrenome}}
    @endisset
    </h2>

    <form action="/mensagem" method="post">
        @csrf

        <input type="text" name="mensagem" id="">
        <input type="submit" value="Enviar">
    </form>

    @isset($mensagem)
        <div class="alert alert-danger">{{ $mensagem }}</div>
    @endisset


@endsection
