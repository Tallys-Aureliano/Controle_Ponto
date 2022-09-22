@extends('layouts.dashboard')

@section('title')
Editar funcionario
@endsection

@section('content-dashboard')

<h1 class="text-center">Editar funcionario</h1>

<form action="{{ route('manager.update.employe', ['id'=>$user->id]) }}" method="POST" class="container mt-5 text-center">
	@csrf
	<div class="input-group mb-3 --form-authentication">
	<input type="file" class="form-control @if($errors->has('image')) is-invalid @endif" name="image" accept="image/*" disabled>
	@if($errors->has('image'))
		<div class="invalid-feedback">
			@error('image') {{ $message }} @enderror
		</div>
	@endif
	</div>

	<div class="input-group mb-3 --form-authentication">
	  <input type="text" name="name" class="form-control @if($errors->has('name')) is-invalid @endif" placeholder="Nome" value="@if(old('name')) {{old('name')}} @else {{$user->name}} @endif" required>
	@if($errors->has('name'))
		<div class="invalid-feedback">
			@error('name') {{ $message }} @enderror
		</div>
	@endif
	</div>

	<div class="input-group mb-3 --form-authentication">
	  <input type="email" class="form-control @if($errors->has('email')) is-invalid @endif" name="email" placeholder="Email" value="@if(old('email')) {{old('email')}} @else {{$user->email}} @endif" required>
	  @if($errors->has('email'))
		<div class="invalid-feedback">
			@error('email') {{ $message }} @enderror
		</div>
	@endif
	</div>

	<div class="--form-authentication">
		<input type="number" class="form-control mb-3 @if($errors->has('matricula')) is-invalid @endif --form-authentication" value="{{$user->matricula}}" name="matricula" placeholder="Matricula" required maxlength="19">
		@if($errors->has('matricula'))
		<div class="invalid-feedback">
			@error('matricula') {{ $message }} @enderror
		</div>
		@endif
	</div>

	<div class="--form-authentication">
		<select name="role" class="form-select @if($errors->has('role')) is-invalid @endif">
			<option value="1" @if($user->role == 1) selected="selected" @endif>Administrador da empresa</option>
			<option value="2" @if($user->role == 2) selected="selected" @endif>Funcionário</option>
		</select>
		@if($errors->has('role'))
		<div class="invalid-feedback">
			@error('role') {{ $message }} @enderror
		</div>
		@endif
	</div>

	<div class="--form-authentication">
		<select name="position" class="form-select">
			@foreach($positions as $position)
				<option value="{{$position->id}}" @if($user->position_id == $position->id) selected="selected" @endif>{{$position->name}}</option>
			@endforeach
		</select>
	</div>

	<div class="--form-authentication">
		<input type="text" class="form-control mb-3 @if($errors->has('cpf')) is-invalid @endif --form-authentication" value="@if(old('cpf')) {{old('cpf')}} @else {{$user->cpf}} @endif" name="cpf" placeholder="Cpf" maxlength="19" required>
		@if($errors->has('cpf'))
		<div class="invalid-feedback">
			@error('cpf') {{ $message }} @enderror
		</div>
		@endif
	</div>

	<div class="--form-authentication">
		<input type="password" class="form-control @if($errors->has('password')) is-invalid @endif mb-3 --form-authentication" name="password" placeholder="Senha" minlength="8" required>
		@if($errors->has('password'))
		<div class="invalid-feedback">
			@error('password') {{ $message }} @enderror
		</div>
		@endif
	</div>

	<div class="--form-authentication">
		<input type="password" class="form-control mb-3 @if($errors->has('password_confirmation')) is-invalid @endif --form-authentication" name="password_confirmation" placeholder="Confirmar senha" required>
		@if($errors->has('password_confirmation'))
		<div class="invalid-feedback">
			@error('password_confirmation') {{ $message }} @enderror
		</div>
		@endif
	</div>

	<div class="--form-authentication-button">
		<button class="btn btn-lg btn-primary-m mt-3">Salvar Funcionário</button>
	</div>
</form>
@endsection