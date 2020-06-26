<?php

use Illuminate\Support\Facades\Route;

/**
 * ENDPOINTS DA API
 */

Route::namespace('api')->group(function(){
    Route::prefix('filme')->group(function(){
        Route::get('/', 'FilmesController@index')->name('filme.index'); //Exibe todos os filmes.
        Route::post('/', 'FilmesController@store')->name('filme.store'); //Insere um novo filme.
        Route::get('/{id}', 'FilmesController@show')->name('filme.show'); //Exibe um filme especifico utilizando o ID.
        Route::delete('/{id}', 'FilmesController@destroy')->name('filme.destroy'); //Remove um filme especifico utilizando o ID.
        Route::put('/', 'FilmesController@update')->name('filme.update'); //Atualiza um filme especifico.
    });
});
