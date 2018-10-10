<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Gerenciamento de Estoque</title>
</head>
<body>
<h1>Sistema de Gerenciamento de Estoque</h1>
<a href="/produtos/criar">Criar novo produto</a>
<table>
	<thead>
		<tr>
			<th>#</th>
			<th>Nome do Produto</th>
			<th>Marca</th>
			<th>Preço</th>
		</tr>
	</thead>
	<tbody>
		@foreach($produtos as $produto)
		<tr>
			<td>{{$produto[0]}}</td>
			<td>{{$produto[1]}}</td>
			<td>{{$produto[2]}}</td>
			<td>{{$produto[3]}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
</body>
</html>