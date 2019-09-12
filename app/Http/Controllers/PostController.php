<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        /*$post = new Post();
        $post->titulo = $request->input('titulo');
        $post->descricao = $request->input('descricao');
        $post->save();*/
        Post::create($request->all());
        return redirect('/posts');
    }

    public function show($id){
       $post = Post::findOrFail($id);
       return view('posts.show', compact('post'));
    }
}
