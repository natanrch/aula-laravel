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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/sistemas', function () {
	return 'Turma de sistemas';
});
Route::get('/alunos/{nome}/{sobrenome}', function ($nome, $sobrenome) {

	echo $nome." ".$sobrenome;
});

Route::get('/produtos', 'ProdutoController@listaProdutos');
Route::get('/produtos/form', 'ProdutoController@form');
Route::post('/produtos/criar', 'ProdutoController@criar');
Route::post('/produtos/editar/{id}', 'ProdutoController@editar');
