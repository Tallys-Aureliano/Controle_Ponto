@extends('layouts.admin')

@section('title')
Funcionario: {{ $user->name }}
@endsection

@section('content-admin')
<nav aria-label="breadcrumb" class="breadcrumb-nav navbar navbar-expand-lg">
  <div class="container-fluid">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.employe.list') }}">Fucionários</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ $user->name }}</li>
    </ol>
  </div>
</nav>

<h1 class="text-center">Funcionário: {{ $user->name }}</h1>


<div class="text-left mx-auto d-flex flex-column align-items-center mt-5">
<a href="{{ route('admin.employe.edit', ['id'=>$user->id]) }}" class="text-center">
	<button class="btn btn-sm btn-secundary-m">Editar</button>
</a>
<img src="{{ asset('assets/img/banner.png') }} alt="Foto do usuario" class="mb-4 mt-5" style="width: 150px; height:150px;border-radius:50%">
	<div class="mx-auto">
		<ul class="list-unstyled text-left mt-5">
			<li><h5>Nome: {{ $user->name }}</h5></li>
			<li class="mt-4"><h5>Email: {{ $user->email }}</h5></li>
			<li class="mt-4">
			<h5>Matricula:
				@if($user->matricula)
					{{ $user->matricula }}
				@else
					Vazio
				@endif
			</h5>
			</li>
			<li class="mt-4"><h5>Cargo: {{ $user->position->name }}</h5></li>
			<li class="mt-4"><h5>Empresa: {{ $user->business->name }}</h5></li>
		</ul>
	</div>
</div>

@endsection
