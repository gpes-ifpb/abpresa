@extends('layouts.base')

@section('content')
<div class="container" style="width: 60%;">
	<form method="post" action="{{action('CategoriaController@update', $id)}}">
		<input name="_method" type="hidden" value="PATCH">
		<h3>Editar categoria</h3>
		<div class="form-group">
			<label>Título</label>
			<input type="text" placeholder="{{$categoria['titulo']}}" name="titulo" class="form-control">
			<small class="form-text text-muted">Informe o novo título da categoria</small>
		</div>
		<button type="submit" class="btn btn-primary">Editar</button>
	</form>
	@endsection