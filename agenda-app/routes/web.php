<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('paginas/index');
});

Route::get('/index', function(){
    return view('paginas/index');
});
//Definindo os caminhos para a pasta casdastrar
Route::get('/cadastrar', function(){
    return view('paginas/cadastrar');
});

Route::get('/consultar', function(){
    return view('paginas/consultar');
});

