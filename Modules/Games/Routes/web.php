<?php

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

Route::prefix('games')->group(function () {
    Route::get('/', 'GamesController@index')->name('games.index');
    Route::get('/componentes', 'GamesController@componentes')->name('games.componentes');
    Route::get('/imagenes', 'GamesController@imagenes')->name('games.galeria_imagenes');
    Route::get('/personajes', 'GamesController@personajes')->name('games.listado_personajes');
});
