<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    public function listaProdutos()
    {
		$produtos = Produto::all();
		return view('produtos.lista-produtos', [
			'produtos' => $produtos,
		]);
    }

    public function formCriar()
    {
    	$produto = new Produto;
    	$acao = 'criar';
    	return view('produtos.form', [
    		'produto' => $produto,
    		'acao' => $acao,
    	]);
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

    public function formEditar($id)
    {
    	$produto = Produto::find($id);
    	$acao = 'atualizar';
    	return view('produtos.form', [
    		'produto' => $produto,
    		'acao' => $acao,
    	]);
    }

    public function atualizar(Request $request)
    {
    	$produto = Produto::find($request->id);
    	$produto->nome = $request->nome;
    	$produto->descricao = $request->descricao;
    	$produto->preco = $request->preco;
    	$produto->quantidade = $request->quantidade;
    	$produto->save();

    	return redirect('/produtos'); 	
    }
}
