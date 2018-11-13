<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    public function listaProdutos(Request $request)
    {   
        $busca = $request->get('busca');
        if ($request->has('busca')) {
            $produtos = Produto::where('nome', 'like', "%{$busca}%")->get();
        } else {
            $produtos = Produto::all();  
        }

		return view('produtos.lista-produtos', [
            'produtos' => $produtos,
			'busca' => $busca,
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
        return dd($produto);
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
