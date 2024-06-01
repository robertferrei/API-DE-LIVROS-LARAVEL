@extends('layouts.app')

@section('content')

<!-- conteudo para renderizar no templete -->
<div class="container mt-10">
    <h1>Adicione um livro a sua lista</h1>
    <hr>
    <form action="{{ route('livros-store') }}" method="POST">
        @csrf
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome: *(obrigatório)</label>
                <input type="text" class="form-control" name="nome" placeholder="Digite um livro">
            </div>
            <br>
            <div class="form-group">
                <label for="categoria">Categoria: *(obrigatório)</label>
                <input type="text" class="form-control" name="categoria" placeholder="Digite uma categoria do livro">
            </div>
            <br>
            <div class="form-group">
                <label for="ano_criacao">Ano de criação *(obrigatório):</label>
                <input type="number" class="form-control" name="ano_criacao" placeholder="Ano do livro">
            </div>
            <br>
            <div class="form-group">
                <label for="valor">Valor do livro: *(obrigatório)</label>
                <input type="number" class="form-control" name="valor" placeholder="Digite o valor do livro">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-danger">
            </div>

        </div>
    </form>
</div>

@endsection