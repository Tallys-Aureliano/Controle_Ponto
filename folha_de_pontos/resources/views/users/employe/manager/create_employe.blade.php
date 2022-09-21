@extends('layouts.dashboard')

@section('title')
Criar funcionario
@endsection

@section('content-dashboard')


<h1 class="text-center">Criar funcionário</h1>

<form action="" method="POST" class="container mt-5  --box-form">
	<label for="inputGroupFile01">Escolha uma foto</label>
	<div class="input-group mb-3">
	<input type="file" class="form-control" id="inputGroupFile01">
	</div>

	<label for="Nome">Nome</label>
	<div class="input-group mb-3 ">
	  <input type="text" name="name" class="form-control" placeholder="Nome" required>
	</div>

	<label for="email">Email</label>
	<div class="input-group mb-3">
	  <input type="email" class="form-control" name="email" placeholder="Email" required>
	</div>

	<label for="matricula">Matricula</label>
	<div class="">
		<input type="text" class="form-control mb-3 " name="matricula" placeholder="Matricula" maxlength="19">
	</div>

	<label for="senha">Senha</label>
	<div class="">
		<input type="password" class="form-control mb-3 " name="password" placeholder="Senha" minlength="8" required>
	</div>

	<label for="password-confirmation">Confirme sua senha</label>
	<div class="">
		<input type="password" class="form-control mb-3" name="password-confirmation" placeholder="Confirmar senha" required>
	</div>
	<button class="btn btn-lg btn-primary-m mt-2">Criar Funcionário</button>
</form>
@endsection