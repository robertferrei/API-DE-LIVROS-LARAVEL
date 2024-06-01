<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivrosControler extends Controller
{
    public function index(){
        $nome = 'robert';
        return(view('livros',['nome'=>$nome]));
    }
    //
}
