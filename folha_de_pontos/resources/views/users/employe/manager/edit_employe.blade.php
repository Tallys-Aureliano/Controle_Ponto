@extends('layouts.dashboard')

@section('title')
Editar funcionario
@endsection

@section('content-dashboard')

<h1 class="text-center">Editar funcionario</h1>

<form action="" method="POST" class="container mt-5 --box-form">
	<label for="inputGroupFile01">Escolha uma foto</label>
	<div class="input-group mb-3 ">
		<input type="file" accept="image/*" class="form-control" id="inputGroupFile01">
	</div>
	
	
	<label for="name">Nome</label>
	<div class="input-group mb-3 ">
		<input type="text" name="name" class="form-control" placeholder="Nome" required value="{{ $user->name }}">
	</div>
	
	<label for="email">Email</label>
	<div class="input-group mb-3 ">
	  <input type="email" class="form-control" name="email" placeholder="Email" required value="{{ $user->email }}">

	</div>

	<label for="matricula">Matricula</label>
	<div class="">
		<input type="text" class="form-control mb-3 " name="matricula" placeholder="Matricula" maxlength="19" value="{{ $user->matricula }}">
	</div>

	<label for="password">Senha</label>
	<div class="">
		<input type="password" class="form-control mb-3 " name="password" placeholder="Senha" minlength="8" required autocomplete="false">
	</div>

	<label for="password-confirmatio">Confirme sua senha</label>
	<div class="">
		<input type="password" class="form-control mb-3 " name="password-confirmation" placeholder="Confirmar senha" required autocomplete="false">
	</div>

	<div class="">
		<button class="btn btn-secundary-m mt-2">Salvar Alterações</button>
	</div>

</form>


<div class="modal" tabindex="-1" id="modal1">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title">Modal title</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
			<p>Modal body text goes here.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
			<button type="button" class="btn btn-secundary-m">Salvar</button>
		  </div>
		</div>
	  </div>
	</div>
@endsection