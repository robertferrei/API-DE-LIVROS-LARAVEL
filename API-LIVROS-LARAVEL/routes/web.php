<?php

use App\Http\Controllers\LivrosControler;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

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


//Route::view('/livros','livros');
//Route::view('/livros','livros',['name' => 'SENHOR DOS ANEIS']);
//parametros para busca 
// Route::get('/livros/{name?}',function($name=null){
//     return view('livros',['nomeLivros'=>$name]);
// });


//Route::get('/livros/{id?}/{name?}',function($id=null,$name=null){
  //  return view('livros',['idLivros'=>$id,'nomeLivros'=>$name]);
//})->where(['id','[0-9]+','name'=> '[a-z]+']);

 
 //criando um grupo de rotas de livros
 Route::prefix('livros')->group(function(){
    Route::get('/',[LivrosControler::class,'index'])->name('livros-index');
    Route::get('/create',[LivrosControler::class,'create'])->name('livros-create');    
    Route::post('/',[LivrosControler::class,'store'])->name('livros-store');
    Route::get('/{id}/edit',[LivrosControler::class,'edit'])-> where('id','[0-9]+')->name('livros-edit');
    Route::put('/{id}',[LivrosControler::class,'update'])-> where('id','[0-9]+')->name('livros-update');
    Route::delete('/{id}',[LivrosControler::class,'destroy'])-> where('id','[0-9]+')->name('livros-destroy');
 });

Route::fallback(function(){
    return "erro!";
});

