@extends('layouts.admin')

@section('title')
Criar funcionário
@endsection

@section('content-admin')
<nav aria-label="breadcrumb" class="breadcrumb-nav navbar navbar-expand-lg">
  <div class="container-fluid">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.employe.list') }}">Funcionários</a></li>
      <li class="breadcrumb-item active" aria-current="page">Criar</li>
    </ol>
  </div>
</nav>

<h1 class="text-center">Criar novo funcionário</h1>

<div class="mt-5 mx-auto --box-form">

	<form action="{{ route('admin.employe.store') }}" method="POST">
		@csrf
		<label for="name" class="mb-2">Nome</label>
		<input type="text" class="form-control @if($errors->has('name')) is-invalid @endif mb-3" placeholder="Nome" name="name" value="{{ old('name') }}" required maxlength="191">
		@if($errors->has('name'))
		<div class="invalid-feedback">
			@error('name') {{ $message }} @enderror
		</div>
		@endif
	
		<label for="email" class="mb-2">Email</label>
		<input type="email" class="form-control @if($errors->has('email')) is-invalid @endif mb-3" placeholder="Email" name="email" value="{{ old('email') }}" required>
		@if($errors->has('email'))
		<div class="invalid-feedback">
			@error('email') {{ $message }} @enderror
		</div>
		@endif
	
		<label for="cpf" class="mb-2">CPF</label>
		<input type="text" class="form-control @if($errors->has('cpf')) is-invalid @endif mb-3" placeholder="CPF" name="cpf" value="{{ old('cpf') }}" required maxlength="191">
		@if($errors->has('cpf'))
		<div class="invalid-feedback">
			@error('cpf') {{ $message }} @enderror
		</div>
		@endif
	
		<label for="matricula" class="mb-2">Matricula</label>
		<input type="number" class="form-control @if($errors->has('matricula')) is-invalid @endif mb-3" placeholder="Matricula" value="{{ old('matricula') }}" name="matricula" maxlength="25">
		@if($errors->has('matricula'))
		<div class="invalid-feedback">
			@error('matricula') {{ $message }} @enderror
		</div>
		@endif
	
		<label for="cpf" class="mb-2">Empresa</label>
		<select class="form-select @if($errors->has('business')) is-invalid @endif mb-3" name="business">
			@foreach($businesss as $business)
				<option value="{{ $business->id }}">{{ $business->name }}</option>
			@endforeach
		</select>
		@if($errors->has('business'))
		<div class="invalid-feedback">
			@error('business') {{ $message }} @enderror
		</div>
		@endif

		<label for="position" class="mb-2">Cargo</label>
		<select class="form-select @if($errors->has('position')) is-invalid @endif mb-3" name="position">
			@foreach($positions as $position)
				<option value="{{ $position->id }}">{{ $position->name }}</option>
			@endforeach
		</select>
		@if($errors->has('position'))
		<div class="invalid-feedback">
			@error('position') {{ $message }} @enderror
		</div>
		@endif
	
		<label for="role" class="mb-2">Tipo de usuário</label>
		<select class="form-select @if($errors->has('role')) is-invalid @endif mb-3" name="role">
			<option value="0">Super usuário</option>
			<option value="1">Administrador</option>
			<option value="2">Empregado</option>
		</select>
		@if($errors->has('role'))
		<div class="invalid-feedback">
			@error('role') {{ $message }} @enderror
		</div>
		@endif
		
		<label for="password" class="mb-2">Senha</label>
		<input type="password" class="form-control @if($errors->has('password')) is-invalid @endif mb-3" placeholder="Senha" name="password" required maxlength="191">
		@if($errors->has('password'))
		<div class="invalid-feedback">
			@error('password') {{ $message }} @enderror
		</div>
		@endif

		<label for="password-confirmation" class="mb-2">Confirme sua senha</label>
		<input type="password" class="form-control @if($errors->has('password_confirmation')) is-invalid @endif mb-3" placeholder="Confirmar senha" name="password_confirmation" required maxlength="191">
		@if($errors->has('password_confirmation'))
		<div class="invalid-feedback">
			@error('password_confirmation') {{ $message }} @enderror
		</div>
		@endif

		<button class="btn btn-secundary-m mt-2">Criar Funcionário</button>
	</form>
</div>

@endsection