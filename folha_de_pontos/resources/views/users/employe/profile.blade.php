@extends('layouts.dashboard')

@section('title')
Ver perfil
@endsection

@section('content-dashboard')
	<h1 class="text-center">Perfil</h1>
	
	<div class="text-left  mx-auto d-flex flex-column align-items-center mt-3">
	@if(auth()->user()->role == 1)
	<a href="{{ route('manager.edit.employe', ['id'=>$user->id]) }}" class="btn btn-secundary-m mt-5 ">Editar</a>
	@endif
		<img
		src="
		@if($user->photo)
		{{ route('view.profile.photo', ['file_name'=>$user->photo]) }}
		@else
		{{ asset('assets/img/profile.jpg') }}
		@endif
		"
		alt="Foto do usuario" class="mb-4 mt-5 shadow-sm" style="width: 150px; height:150px;border-radius:50%">
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