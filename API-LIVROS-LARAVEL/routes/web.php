<?php

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

Route::get('/livros',function(){
    return  view('livros');
});

 Route::get('/home', function () {
     return view('welcome');
 })->name('home-index');


 //caso de erro de encontrar erro
 Route::fallback(function(){
    return "erro ao localizar a rota";
 });

