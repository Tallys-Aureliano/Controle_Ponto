@extends('base')

@section('title')
Registrando pontos
@endsection

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/admin.css') }}">
@endsection

@section('content')
<body>

<header>
	<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <p class="navbar-brand me-auto text-white fs-4"">Autenticado por: {{ auth()->user()->name }}.</p>
    <form action="{{ route('logout') }}" method="POST" class="d-flex">
    	@csrf
      <button class="btn btn-sair" type="submit">Sair</button>
    </form>
  </div>
</nav>
</header>

	<main class="container">

		@include('partials.flash_messages')

		<h1 class="text-center mt-3 mb-3">Registro de pontos</h1>

		<form action="{{ route('manager.point.store') }}" method="POST">
			@csrf
			<label for="matricula">Matricula</label>
			<input type="text" id="matricula" placeholder="Matricula" class="form-control form-control-sm @if($errors->has('matricula')) is-invalid @endif mb-3" name="matricula" required>
			@if($errors->has('matricula'))
				<div class="invalid-feedback">
					@error('matricula') {{ $message }} @enderror
				</div>
			@endif

			<label for="password">Senha</label>
			<input type="password" id="password" placeholder="Senha" class="form-control @if($errors->has('password')) is-invalid @endif form-control-sm mb-3" name="password" name="password" required>
			@if($errors->has('password'))
				<div class="invalid-feedback">
					@error('password') {{ $message }} @enderror
				</div>
			@endif

			<button class="btn btn-sm btn-outline-success">Registrar</button>

		</form>

	</main>


</body>
@endsection