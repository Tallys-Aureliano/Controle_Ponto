@extends('partials.auth._auth')

@section('title')
Cadastrar empresa
@endsection

@section('auth-content')
<form action="{{ route('business.store') }}" method="POST">
	@csrf
	<h1 class="text-center pb-4">Cadastro da empresa</h1>
	<div class="--form-authentication ">
		<input type="text" name="name" class="form-control @if($errors->has('name')) is-invalid @endif mt-3" placeholder="Nome da empresa" required maxlength="45">
	</div>
	<div class="--form-authentication-button text-center mt-5">
		<button class="btn btn-lg btn-primary-m">Criar</button>
	</div>
</form>
<form action="{{ route('logout') }}" method="POST">
	@csrf
</form>
<div class="--form-authentication-button text-center">
	<button class="btn btn-lg btn-terciary-m mt-2">Sair</button>
</div>
@endsection