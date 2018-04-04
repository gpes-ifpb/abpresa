@extends('layouts.base')

@section('content')
<div class="container" style="width: 60%;">
<form method="post" action="{{url('categoria')}}">
	<h3>Cadastrar nova categoria</h3>
	<div class="form-group">
		<label for="staticEmail">Título</label>
		<input type="text" name="titulo" class="form-control">
		<small class="form-text text-muted">Informe o título da nova categoria</small>
	</div>
	<button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection