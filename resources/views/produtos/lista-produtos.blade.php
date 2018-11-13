@extends('layout')

@section('conteudo-principal')
<div>
	<a href="/produtos/form">Criar novo produto</a>
</div>
<div>
	<form action="" method="GET">
		<input type="text" name="busca" value="{{$busca}}">
		<button type="submit">Pesquisar</button>
	</form>
</div>
@if($busca)
<a href="/produtos">Limpar busca</a>
@endif
@if(count($produtos))
<table>
	<thead>
		<tr>
			<th>#</th>
			<th>Nome</th>
			<th>Descrição</th>
			<th>Preço</th>
			<th>Quantidade</th>
		</tr>
	</thead>
	<tbody>
		@foreach($produtos as $produto)
		<tr>
			<td>{{$produto->id}}</td>
			<td>{{$produto->nome}}</td>
			<td>{{$produto->descricao}}</td>
			<td
				@if($produto->preco < 2)
					style="background-color: red"
				@else
					style="background-color: green"
				@endif
			>
				{{$produto->preco}}
			</td>
			<td>{{$produto->quantidade}}</td>
			<td><a href="/produtos/editar/{{$produto->id}}">Editar</a></td>
			<td><a href="#">Deletar</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
@else
<h3 class="alert-danger">Não foi localizado produtos com o filtro: {{$busca}}</h3>
@endif
@stop