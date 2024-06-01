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

    public function edit($id){
        $livros = Livro::where('id',$id)->first();  //first para pegar o primeiro resultado
        
        if(!empty($livros)){
            return view('livros.edit',['livros'=>$livros]);            
        }
        else{
            return redirect()->route('livros-index');
        }
    }


    public function update(Request $request, $id){
        $data =[
            'nome' => $request ->nome,
            'nome' => $request ->categoria,
            'nome' => $request ->ano_criacao,
            'nome' => $request ->valor,
        ];
        Livro::where('id',$id)->update($data);
        return redirect() ->route('livros-index');
    }
    public function destroy($id){
        Livro::where('id',$id)->delete();
        return redirect() ->route('livros-index');
    }
     //
}
