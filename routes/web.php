<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "<h1>Hello world!</h1>";
});

Route::get('/hello/{nome}/{sobrenome}', function ($nome, $sobrenome) {
    return view('pagina', ['nome' => $nome, 'sobrenome' => $sobrenome]);
});

Route::get('/soma/{n1}/{n2}', function ($n1, $n2) {
    $soma = $n1 + $n2;
    return "<h1>A soma de $n1 com $n2 é $soma</h1>";
});

Route::post('/mensagem', 'TesteController@escreveMensagem');

Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
