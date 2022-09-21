@extends('layouts.dashboard')

@section('title')
Criar funcionario
@endsection

@section('content-dashboard')

<h1 class="text-center">Criar funcionário</h1>

<form action="" method="POST" class="container mt-5 text-center">
	<div class="input-group mb-3 --form-authentication">
	<input type="file" class="form-control" id="inputGroupFile01">
	</div>

	<div class="input-group mb-3 --form-authentication">
	  <input type="text" name="name" class="form-control" placeholder="Nome" required>
	</div>

	<div class="input-group mb-3 --form-authentication">
	  <input type="email" class="form-control" name="email" placeholder="Email" required>

	</div>
	<div class="--form-authentication">
		<input type="text" class="form-control mb-3 --form-authentication" name="matricula" placeholder="Matricula" maxlength="19">
	</div>

	<div class="--form-authentication">
		<input type="password" class="form-control mb-3 --form-authentication" name="password" placeholder="Senha" minlength="8" required>
	</div>
	<div class="--form-authentication">
		<input type="password" class="form-control mb-3 --form-authentication" name="password-confirmation" placeholder="Confirmar senha" required>
	</div>
	<div class="--form-authentication-button">
		<button class="btn btn-lg btn-primary-m mt-3">Criar Funcionário</button>
	</div>
</form>
@endsection