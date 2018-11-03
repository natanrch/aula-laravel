@extends('layout')

@section('conteudo-principal')

<form method="post" action="/produtos/criar">
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}">
	<input type="text" name="nome" placeholder="Digite o nome">
	<input type="text" name="descricao" placeholder="Digite a descrição">
	Preço: <input type="number" name="preco" step="0.01">
	Quantidade: <input type="number" name="quantidade">
	<button type="submit">Enviar</button>
</form>

@stop