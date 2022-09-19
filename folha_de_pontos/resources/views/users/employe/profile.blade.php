@extends('layouts.dashboard')

@section('title')
Meu perfil
@endsection

@section('content-dashboard')

	<h1 class="text-center">Meu perfil</h1>

	<a href="" class="btn btn-primary">Editar</a>
	<br>
	<img src="{{ $user->photo }}" alt="Foto do usuario">
	<p>Nome: {{ $user->name }}</p>
	<p>Email: {{ $user->email }}</p>
	<p>Matricula: {{ $user->matricula }}</p>
	<p>Cpf: {{ $user->cpf }}</p>
	<p>Cargo: {{ $user->position->name }}</p>
	

@endsection