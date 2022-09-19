@extends('layouts.dashboard')

@section('title')
Criar funcionario
@endsection

@section('content-dashboard')

<h1 class="text-center">Criar funcionario</h1>

<form action="" method="POST" class="container mt-5">
	<div class="input-group mb-3">
	<label class="input-group-text" for="inputGroupFile01">Upload</label>
	<input type="file" class="form-control" id="inputGroupFile01">
	</div>
	<div class="input-group mb-3">
	  <span class="input-group-text" id="basic-addon1">@</span>
	  <input type="text" name="name" class="form-control" placeholder="Nome" required>
	</div>

	<div class="input-group mb-3">
	  <input type="email" class="form-control" name="email" placeholder="Email" required>
	  <span class="input-group-text" id="basic-addon2">@exemplo.com</span>
	</div>

	<input type="text" class="form-control mb-3" name="matricula" placeholder="Matricula" maxlength="19">

	<input type="password" class="form-control mb-3" name="password" placeholder="Senha" minlength="8" required>

	<input type="password" class="form-control mb-3" name="password-confirmation" placeholder="Confirmar senha" required>

	<button class="btn btn-outline-success">Criar</button>

</form>
@endsection