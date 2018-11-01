@extends('layout')

@section('conteudo-principal')
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
			<td>{{$produto['id']}}</td>
			<td>{{$produto['nome']}}</td>
			<td>{{$produto['descricao']}}</td>
			<td
				@if($produto['preco'] < 2)
					style="background-color: red"
				@else
					style="background-color: green"
				@endif
			>
				{{$produto['preco']}}
			</td>
			<td>{{$produto['quantidade']}}</td>
			<td><a href="#">Editar</a></td>
			<td><a href="#">Deletar</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
@stop