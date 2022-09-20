@extends('layouts.dashboard')

@section('title')
Editar empresa
@endsection

@section('content-dashboard')
	<h1 class="text-center">Editar empresa</h1>
	<form action="{{ route('manager.update.business') }}" method="POST" class="container mt-5 text-center">
		@csrf
		<div class="input-group mb-3 --form-authentication">
			<input type="text" class="form-control form-control-lg mt-3" name="name" maxlength="45" required placeholder="Nome da empresa" value="{{ $business->name }}">
		</div>
		<div class="input-group mb-3 --form-authentication">
			<input type="text" class="form-control form-control-lg mt-3" name="cnpj" maxlength="22" required placeholder="CNPJ da empresa" value="{{ $business->cnpj }}">
		</div>
		<button class="btn btn-lg btn-secundary-m mt-3">Salvar Alterações</button>
	</form>
@endsection