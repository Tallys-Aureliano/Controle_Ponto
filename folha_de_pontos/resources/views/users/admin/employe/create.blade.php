@extends('layouts.admin')

@section('title')
Criar funcionário
@endsection

@section('content-admin')
<h1 class="text-center">Criar novo funcionário</h1>

<form action="{{ route('admin.employe.store') }}" method="POST">
	<input type="text" class="form-control" placeholder="Nome" name="name" required maxlength="191">
	<input type="email" class="form-control" placeholder="Email" name="email" required>
	<input type="text" class="form-control" placeholder="Cpf" name="cpf" required maxlength="191">
	<input type="text" class="form-control" placeholder="Matricula" name="matricula" required maxlength="191">
	<select class="form-select">
		<option>SeridoPonto</option>
	</select>
	<select class="form-select">
		<option>Gerente</option>
	</select>
	<input type="password" class="form-control" placeholder="Senha" name="password" required maxlength="191">
	<input type="password" class="form-control" placeholder="Confirmar senha" name="password_confirmation" required maxlength="191">

	<button class="btn btn-outline-success">Adicionar</button>


</form>

@endsection