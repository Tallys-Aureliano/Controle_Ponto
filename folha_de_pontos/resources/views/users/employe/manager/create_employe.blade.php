@extends('layouts.dashboard')

@section('title')
Criar funcionario
@endsection

@section('content-dashboard')


<h1 class="text-center">Criar funcionário</h1>

<form action="{{ route('manager.store.employe') }}" method="POST" enctype="multipart/form-data" class="container mt-5  --box-form">
	@csrf
	<label for="inputGroupFile01">Escolha uma foto</label>
	<div class="input-group mb-3">
	<input type="file" class="form-control @if($errors->has('image')) is-invalid @endif" name="image" accept="image/*">
	@if($errors->has('image'))
		<div class="invalid-feedback">
			@error('image') {{ $message }} @enderror
		</div>
	@endif
	</div>

	<label for="Nome">Nome</label>
	<div class="input-group mb-3 ">
	  <input type="text" name="name" class="form-control @if($errors->has('name')) is-invalid @endif" placeholder="Nome" value="{{old('name')}}" required>
	@if($errors->has('name'))
		<div class="invalid-feedback">
			@error('name') {{ $message }} @enderror
		</div>
	@endif
	</div>

	<label for="email">Email</label>
	<div class="input-group mb-3">
	  <input type="email" class="form-control @if($errors->has('email')) is-invalid @endif" name="email" placeholder="Email" value="{{old('email')}}" required>
	  @if($errors->has('email'))
		<div class="invalid-feedback">
			@error('email') {{ $message }} @enderror
		</div>
		@endif
	</div>

	<label for="matricula">Matricula</label>
	<div class="">
		<input type="number" class="form-control mb-3 @if($errors->has('matricula')) is-invalid @endif --form-authentication" name="matricula" value="{{old('matricula')}}" placeholder="Matricula" required maxlength="19">
		@if($errors->has('matricula'))
		<div class="invalid-feedback">
			@error('matricula') {{ $message }} @enderror
		</div>
		@endif
	</div>

	<div class="--form-authentication">
		<select name="role" class="form-select @if($errors->has('role')) is-invalid @endif">
			<option value="1" @if(old('position') == 1) selected="selected" @endif>Administrador da empresa</option>
			<option value="2" @if(old('position') == 2) selected="selected" @endif>Funcionário</option>
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
				<option value="{{$position->id}}" @if($position->id == old('position')) selected="selected" @endif>{{$position->name}}</option>
			@endforeach
		</select>
	</div>

	<div class="--form-authentication">
		<input type="text" class="form-control mb-3 @if($errors->has('cpf')) is-invalid @endif --form-authentication" name="cpf" value="{{old('cpf')}}" placeholder="Cpf" maxlength="19" required>
		@if($errors->has('cpf'))
		<div class="invalid-feedback">
			@error('cpf') {{ $message }} @enderror
		</div>
		@endif
	</div>

	<label for="senha">Senha</label>
	<div class="">
		<input type="password" class="form-control @if($errors->has('password')) is-invalid @endif mb-3 --form-authentication" name="password" placeholder="Senha" minlength="8" required>
		@if($errors->has('password'))
		<div class="invalid-feedback">
			@error('password') {{ $message }} @enderror
		</div>
		@endif
	</div>

	<label for="password-confirmation">Confirme sua senha</label>
	<div class="">
		<input type="password" class="form-control mb-3 @if($errors->has('password_confirmation')) is-invalid @endif --form-authentication" name="password_confirmation" placeholder="Confirmar senha" required>
		@if($errors->has('password_confirmation'))
		<div class="invalid-feedback">
			@error('password_confirmation') {{ $message }} @enderror
		</div>
		@endif
	</div>
	<button class="btn btn-lg btn-primary-m mt-2">Criar Funcionário</button>
</form>
@endsection