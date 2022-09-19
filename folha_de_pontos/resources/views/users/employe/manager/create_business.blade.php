@extends('partials.auth._auth')

@section('title')
Cadastrar empresa
@endsection

@section('auth-content')
<div class="text-center">
	<img src="{{ asset('assets/img/logo-grande.png') }}" alt="">
</div>
<form action="{{ route('business.store') }}" method="POST">
	@csrf
	<h1 class="text-center">Cadastro da empresa</h1>
	<div class="--form-authentication">
		<input type="text" name="name" class="form-control mt-3" placeholder="Nome da empresa" required maxlength="45">
		<input type="text" name="cnpj" class="form-control mt-3" placeholder="CNPJ da empresa" required maxlength="22">
	</div>
	<div class="--form-authentication-button text-center mt-4">
		<button class="btn btn-lg btn-primary-m">Criar</button>
	</div>
</form>
<form action="{{ route('logout') }}" method="POST">
	@csrf
<div class="--form-authentication-button text-center mt-4">
	<button class="btn btn-lg btn-terciary-m mt-2">Sair</button>
</div>
</form>
@endsection