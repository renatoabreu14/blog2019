<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = array('titulo', 'descricao');

    public function comments(){
        return $this->hasMany('App\Comment');
    }
}
