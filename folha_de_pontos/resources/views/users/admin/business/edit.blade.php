@extends('layouts.admin')

@section('title')
Editar empresa
@endsection

@section('content-admin')

	<h1 class="text-center">EDITAR EMPRESA</h1>

	<form action="{{ route('admin.business.update', ['id' => $business->id]) }}" method="POST">
		@csrf
		<input type="text" class="form-control mb-3" name="name" placeholder="Nome da empresa" required value="{{ $business->name }}">
		<select class="form-select" name="active">
		  <option value="1">Ativa</option>
		  <option value="0"@if(!$business->active)selected="selected"@endif >Desativada</option>
		</select>
		<button class="btn btn-sm btn-outline-success">Salvar</button>
	</form>


@endsection