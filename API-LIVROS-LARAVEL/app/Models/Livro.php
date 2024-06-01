<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    //defininando colunas que podem ser preenchidas
    protected $fillable =[
        'nome',
        'categoria',
        'ano_criacao',
        'valor'
    ];
}
