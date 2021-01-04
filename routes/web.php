<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'noticiasController@index');
Route::get('/nova_noticia', 'noticiasController@create');
Route::post('/salvar_noticia', 'noticiasController@store');
Route::get('/gerir_noticias', 'noticiasController@gestao');

// visibilidade
Route::get('colocar_visivel/{id}', 'noticiasController@colocarVisivel');
Route::get('colocar_invisivel/{id}', 'noticiasController@colocarInvisivel');

// excluir
Route::get('excluir_noticia/{id}', 'noticiasController@destroy');

// editar | atualizar
Route::get('editar_noticia/{id}', 'noticiasController@edit');
Route::post('atualizar_noticia/{id}', 'noticiasController@update');