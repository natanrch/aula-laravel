<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    public function listaProdutos()
    {
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
    }

    public function form()
    {
    	return view('produtos.form');
    }

    public function criar(Request $request)
    {
    	$produto = new Produto;
    	$produto->nome = $request->nome;
    	$produto->descricao = $request->descricao;
    	$produto->preco = $request->preco;
    	$produto->quantidade = $request->quantidade;
    	$produto->save();

    	return redirect('/produtos');
    }
}
