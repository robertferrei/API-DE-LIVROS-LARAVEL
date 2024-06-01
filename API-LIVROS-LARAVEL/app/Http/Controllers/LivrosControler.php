<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivrosControler extends Controller
{
    public function index(){
        $livros = livro::all(); //<- pega todos os registro da tabela livros
        //dd($livros);
        return view('livros.index',['livros'=>$livros]);
    }

    public function create(){
        return view('livros.create');
    }

    public function store(Request  $request){
      Livro::create($request->all()); 
      return redirect()->route('livros-index');
    }
     
     //
}
