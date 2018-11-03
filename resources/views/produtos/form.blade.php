@extends('layout')

@section('conteudo-principal')

<form method="post" action="/produtos/{{$acao}}">
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}">
	<input type="hidden" name="id" value="{{$produto->id}}">
	<input type="text" name="nome" placeholder="Digite o nome" value="{{$produto->nome}}">
	<input type="text" name="descricao" placeholder="Digite a descrição" value="{{$produto->descricao}}">
	Preço: <input type="number" name="preco" step="0.01" value="{{$produto->preco}}">
	Quantidade: <input type="number" name="quantidade" value="{{$produto->quantidade}}">
	<button type="submit">Enviar</button>
</form>

@stop