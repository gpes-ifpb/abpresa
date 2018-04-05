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
				</tr>
			</thead>
			<tbody>

				@foreach($categorias as $categoria)
				<tr>
					<td>{{$categoria['id']}}</td>
					<td>{{$categoria['titulo']}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@endif
	</div>
</div>
@endsection