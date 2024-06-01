@extends('layouts.app')

@section('content')

<!-- conteudo para renderizar no templete -->

<div class="row">
    <div class="col-sm-10">
        <h1>listagem de livros</h1>        
    </div>
    <div class="col-sm-2">
    <a href="{{route('livros-create')}} "class="btn btn-success">Novo livro</a>
    </div>
</div>
<table class="table table-striped">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Categoria</th>
                <th scope="col">Ano criação</th>
                <th scope="col">Valor</th>
            </tr>
        </thead>
        <tbody>
            @foreach($livros as $livro)
            <tr>
                <th>{{$livro->id}}</th>
                <th>{{$livro->nome}}</th>
                <th>{{$livro->categoria}}</th>
                <th>{{$livro->ano_criacao}}</th>
                <th>{{$livro->valor}}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</table>
@endsection