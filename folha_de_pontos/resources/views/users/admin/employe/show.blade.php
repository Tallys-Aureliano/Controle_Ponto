@extends('layouts.admin')

@section('title')
Funcionario: {{ $user->name }}
@endsection

@section('content-admin')
<h1 class="text-center">Funcionário: {{ $user->name }}</h1>

<a href="{{ route('admin.employe.edit', ['id'=>$user->id]) }}">
	<button class="btn btn-sm btn-outline-success">Editar</button>
</a>

<p>Nome: {{ $user->name }}</p>
<p>Email: {{ $user->email }}</p>
<p>Matricula:
	@if($user->matricula)
		{{ $user->matricula }}
	@else
		Vazio
	@endif
</p>
<p>Cargo: {{ $user->position->name }}</p>
<p>Empresa: {{ $user->business->name }}</p>


@endsection