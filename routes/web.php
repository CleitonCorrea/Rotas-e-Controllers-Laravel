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

Route::get('/', function () {
    return view('welcome');
});

Route::get('medicos', 'medicosController@getMedicos');// criamdo um controler e passando uma action para ser executada

Route::get('/administrador/cleiton/thebest/', array('as' => 'the_best', function(){ //criando um alias para uma rota

		return view('the_best');
}));

Route::get('usuario/{nome}/{idade}', 'usuarioController@apresentarDados' );// passando parametros para o controller

//Utilizando as Action do Controller Padrão do Laravel

Route::get('produtos',       'produtoController@index');
Route::get('mostra_produto/{id}', 'produtoController@show');
