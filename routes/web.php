<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
});

//Route::view('jogos','jogos');

//Route::get('/jogos', function(){
//    return "Curso de Laravel do Gustavo";
//});

//Route::view('/jogos', 'jogos', ['name'=>'Pedro']);

//Route::get('/jogos/{name?}/{id?}', function($name = null, $id= null){
//    return view('jogos',['nomeJogo'=>$name, 'idJogo'=>$id]);
//})->where(['id' => '[0-9]+','name' => '[A-Za-z]+']);
