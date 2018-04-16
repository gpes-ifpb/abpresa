@extends('layouts.base')

@section('content')
<div class="container" style="width: 60%;">
	@if (\Session::has('success'))
	<div class="alert alert-success">
		<p>{{ \Session::get('success') }}</p>
	</div><br />
	@endif

	<div class="row">
		<div class="col-md-6">
			<h3>Categorias</h3>
		</div>
		<div class="col-md-6" style="text-align: right;">
			<a role="button" class="btn btn-primary" href="/categoria/create">Cadatrar categoria</a>
		</div>
	</div>

	<div style="padding-top: 20px;">
		@if(empty($categorias))
		<p>Nenhuma categoria cadastrada</p>
		@else
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Título</th>

					<th>Ações</th>
				</tr>
			</thead>
			<tbody>

				@foreach($categorias as $categoria)
				<tr>
					<td>{{$categoria['id']}}</td>
					<td>{{$categoria['titulo']}}</td>
					<td><a href="{{action('CategoriaController@edit', $categoria['id'])}}" class="btn btn-warning">Editar</a></td>
					<td>
						<form action="{{action('CategoriaController@destroy', $categoria['id'])}}" method="post">
							<input name="_method" type="hidden" value="DELETE">
							<button class="btn btn-danger" type="submit">Excluir</button>
						</tr>
						@endforeach
					</tbody>
				</table>
				@endif
			</div>
		</div>
		@endsection