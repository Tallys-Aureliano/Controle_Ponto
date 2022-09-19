@extends('layouts.dashboard')

@section('title')
Editar empresa
@endsection

@section('content-dashboard')
	<h1 class="text-center">Editar empresa</h1>

	<form action="{{ route('manager.update.business') }}" method="POST">
		@csrf
		<input type="text" class="form-control form-control-sm mt-3" name="name" maxlength="45" required placeholder="Nome da empresa" value="{{ $business->name }}">
		<input type="text" class="form-control form-control-sm mt-3" name="cnpj" maxlength="22" required placeholder="CNPJ da empresa" value="{{ $business->cnpj }}">
		<button class="btn btn-sm btn-outline-success mt-3">Salvar</button>

	</form>
 
@endsection