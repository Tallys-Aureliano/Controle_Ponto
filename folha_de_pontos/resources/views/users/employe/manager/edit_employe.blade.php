@extends('layouts.dashboard')

@section('title')
Editar funcionario
@endsection

@section('content-dashboard')

<h1 class="text-center">Editar funcionario</h1>

<form action="" method="POST" class="container mt-5 text-center">
	<div class="input-group mb-3 --form-authentication">
	<input type="file" accept="image/*" class="form-control" id="inputGroupFile01">
	</div>

	<div class="input-group mb-3 --form-authentication">
	  <input type="text" name="name" class="form-control" placeholder="Nome" required value="{{ $user->name }}">
	</div>

	<div class="input-group mb-3 --form-authentication">
	  <input type="email" class="form-control" name="email" placeholder="Email" required value="{{ $user->email }}">

	</div>
	<div class="--form-authentication">
		<input type="text" class="form-control mb-3 --form-authentication" name="matricula" placeholder="Matricula" maxlength="19" value="{{ $user->matricula }}">
	</div>

	<div class="--form-authentication">
		<input type="password" class="form-control mb-3 --form-authentication" name="password" placeholder="Senha" minlength="8" required autocomplete="false">
	</div>
	<div class="--form-authentication">
		<input type="password" class="form-control mb-3 --form-authentication" name="password-confirmation" placeholder="Confirmar senha" required autocomplete="false">
	</div>

	<div class="--form-authentication-button">
		<button class="btn btn-lg btn-secundary-m mt-3">Salvar Alterações</button>
	</div>

</form>
@endsection