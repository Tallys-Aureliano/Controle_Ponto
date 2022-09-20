@extends('layouts.admin')

@section('title')
Editar empresa
@endsection

@section('content-admin')

	<h1 class="text-center">EDITAR EMPRESA</h1>

	<div class="mt-5">
		<form action="{{ route('admin.business.update', ['id' => $business->id]) }}" method="POST">
			@csrf
			<input type="text" class="form-control mb-3" name="name" placeholder="Nome da empresa" required value="{{ $business->name }}">
			<select class="form-select" name="active">
			  <option value="1">Ativa</option>
			  <option value="0"@if(!$business->active)selected="selected"@endif >Desativada</option>
			</select>
			<div class="text-center">
				<button class="btn bt-lg btn-secundary-m mt-3">Salvar Alterações</button>
			</div>
		</form>
	</div>

@endsection