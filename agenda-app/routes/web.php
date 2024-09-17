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


//As rotas utilizando o padrão MVC
Route::get('/cadastrar',[\App\Http\Controllers\registrarAtividadeController::class, 'index']);
Route::get('/cadastrar/salvar', [\App\Http\Controllers\registrarAtividadeController::class,'store']);
Route::get('/consultar',[\App\Http\Controllers\registrarAtividadeController::class, 'consultar']);
Route::get('/editar/{id}', [\App\Http\Controllers\registrarAtividadeController::class, 'editar']);
Route::get('/atualizar/{id}', [\App\Http\Controllers\registrarAtividadeController::class, 'atualizar']);
Route::get('/excluir/{id}', [\App\Http\Controllers\registrarAtividadeController::class, 'excluir']);