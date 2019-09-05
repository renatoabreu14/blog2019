<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    //
    public function escreveMensagem(Request $request){
        $mensagem = $request->input('mensagem');
        return view('pagina', compact('mensagem'));
    }
}
