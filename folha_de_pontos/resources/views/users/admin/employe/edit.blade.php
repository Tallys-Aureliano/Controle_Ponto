@extends('layouts.admin')

@section('title')
Editar funcionário
@endsection

@section('content-admin')
<h1 class="text-center">Editar funcionário</h1>

<div class="mt-5">

	<form action="{{ route('admin.employe.update', ['id'=>$user->id]) }}" method="POST">
		@csrf
		<input type="text" class="form-control @if($errors->has('name')) is-invalid @endif" placeholder="Nome" name="name" value="{{ $user->name }}" required maxlength="191">
		@if($errors->has('name'))
		<div class="invalid-feedback">
			@error('name') {{ $message }} @enderror
		</div>
		@endif
	
		<input type="email" class="form-control @if($errors->has('email')) is-invalid @endif mt-2"" placeholder="Email" name="email" value="{{ $user->email }}" required>
		@if($errors->has('email'))
		<div class="invalid-feedback">
			@error('email') {{ $message }} @enderror
		</div>
		@endif
	
		<input type="text" class="form-control @if($errors->has('cpf')) is-invalid @endif mt-2"" placeholder="Cpf" name="cpf" value="{{ $user->cpf }}" required maxlength="191">
		@if($errors->has('cpf'))
		<div class="invalid-feedback">
			@error('cpf') {{ $message }} @enderror
		</div>
		@endif
	
		<input type="number" class="form-control @if($errors->has('matricula')) is-invalid @endif mt-2"" placeholder="Matricula" name="matricula" value="{{ $user->matricula }}" maxlength="25">
		@if($errors->has('matricula'))
		<div class="invalid-feedback">
			@error('matricula') {{ $message }} @enderror
		</div>
		@endif
	
		<select class="form-select @if($errors->has('business')) is-invalid @endif mt-2"" name="business">
			@foreach($businesss as $business)
				<option value="{{ $business->id }}" @if($user->business_id == $business->id) selected="selected" @endif>{{ $business->name }}</option>
			@endforeach
		</select>
		@if($errors->has('business'))
		<div class="invalid-feedback">
			@error('business') {{ $message }} @enderror
		</div>
		@endif
	
		<select class="form-select @if($errors->has('position')) is-invalid @endif mt-2"" name="position">
			@foreach($positions as $position)
				<option value="{{ $position->id }}" @if($user->position_id == $position->id) selected="selected" @endif>{{ $position->name }}</option>
			@endforeach
		</select>
		@if($errors->has('position'))
		<div class="invalid-feedback">
			@error('position') {{ $message }} @enderror
		</div>
		@endif
	
		<select class="form-select @if($errors->has('role')) is-invalid @endif mt-2"" name="role">
			<option value="0" @if($user->role == 0) selected="selected" @endif>Super usuário</option>
			<option value="1" @if($user->role == 1) selected="selected" @endif>Administrador</option>
			<option value="2" @if($user->role == 2) selected="selected" @endif>Empregado</option>
		</select>
		@if($errors->has('role'))
		<div class="invalid-feedback">
			@error('role') {{ $message }} @enderror
		</div>
		@endif
	
		<input type="password" class="form-control @if($errors->has('password')) is-invalid @endif mt-2"" placeholder="Senha" name="password" required maxlength="191">
		@if($errors->has('password'))
		<div class="invalid-feedback">
			@error('password') {{ $message }} @enderror
		</div>
		@endif
	
		<input type="password" class="form-control @if($errors->has('password')) is-invalid @endif mt-2"" placeholder="Confirmar senha" name="password_confirmation" required maxlength="191">
		@if($errors->has('password'))
		<div class="invalid-feedback">
			@error('password') {{ $message }} @enderror
		</div>
		@endif
		<div class="text-center mt-3">
			<button class="btn btn-secundary-m">Salvar Alterações</button>
		</div>
	
	</form>
</div>

@endsection