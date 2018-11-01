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
// Route::get('produtos', function () {
// 	$produtos = [
// 		['1', 'Arroz', 'Tio João', 'R$ 8,50'],
// 		['2', 'Feijão', 'Tio João', 'R$ 5,70'],
// 		['3', 'Farinha', 'Farinha timbiras', 'R$ 3,50']
// 	];
// 	return view('lista-produtos', ['produtos' => $produtos]);
// });
Route::get('produtos', function () {
	$produtos = [
		[
			'id' => 1,
			'nome' => 'Arroz',
			'descricao' => 'Arroz Tio João',
			'preco' => 5.00,
			'quantidade' => 5,
		],
		[
			'id' => 2,
			'nome' => 'Feijão',
			'descricao' => 'Feijão Tio João',
			'preco' => 1.00,
			'quantidade' => 6,
		],
	];
	return view('produtos.lista-produtos', [
		'produtos' => $produtos,
	]);
});
Route::get('produtos/criar', function () {
	echo 'Tela para criar o produto <a href="/produtos">Voltar para lista de produtos </a>';
});