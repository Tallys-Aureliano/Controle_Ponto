@extends('layouts.dashboard')

@section('title')
Meu perfil
@endsection

@section('content-dashboard')
	
	<h1 class="text-center">Meu perfil</h1>
	<div class="mt-3">
	</div>
	<div class="text-center mx-auto d-flex flex-column align-items-center">
	<a href="" class="btn btn-secundary-m mt-5 ">Editar</a>
		<img src="{{ asset('assets/img/banner.png') }} alt="Foto do usuario" class="mb-4 mt-5" style="width: 150px; height:150px;border-radius:50%">
		<div class="mx-auto" >
			<ul class="list-unstyled text-left mt-5">
				<li class=""><h5>Nome: {{ $user->name }}</h5></li>
				<li class="mt-4"><h5>Email: {{ $user->email }}</h5></li>
				<li class="mt-4"><h5>Matricula: {{ $user->matricula }}</h5></li>
				<li class="mt-4"><h5>Cpf: {{ $user->cpf }}</h5></li>
				<li class="mt-4"><h5>Cargo: {{ $user->position->name }}</h5></li>
			</ul>	
		</div>
	</div>

@endsection