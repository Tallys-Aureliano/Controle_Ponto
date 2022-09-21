@extends('layouts.admin')

@section('title')
Editar funcionário
@endsection

@section('content-admin')
<h1 class="text-center">Editar funcionário</h1>

<div class="mt-5 mx-auto --box-form">

	<form action="{{ route('admin.employe.update', ['id'=>$user->id]) }}" method="POST" class="mx-auto --box-form">
		@csrf
		<label for="name" class="mb-2">Nome</label>
		<input type="text" class="form-control @if($errors->has('name')) is-invalid @endif mb-3" placeholder="Nome" name="name" value="{{ $user->name }}" required maxlength="191">
		@if($errors->has('name'))
		<div class="invalid-feedback">
			@error('name') {{ $message }} @enderror
		</div>
		@endif
	
		<label for="email" class="mb-2">Email</label>
		<input type="email" class="form-control @if($errors->has('email')) is-invalid @endif mb-3" placeholder="Email" name="email" value="{{ $user->email }}" required>
		@if($errors->has('email'))
		<div class="invalid-feedback">
			@error('email') {{ $message }} @enderror
		</div>
		@endif
	
		<label for="cpf" class="mb-2">CPF</label>
		<input type="text" class="form-control @if($errors->has('cpf')) is-invalid @endif mb-3" placeholder="CPF" name="cpf" value="{{ $user->cpf }}" required maxlength="191">
		@if($errors->has('cpf'))
		<div class="invalid-feedback">
			@error('cpf') {{ $message }} @enderror
		</div>
		@endif
	
		<label for="matricula" class="mb-2">Nome</label>
		<input type="number" class="form-control @if($errors->has('matricula')) is-invalid @endif mb-3" placeholder="Matricula" name="matricula" value="{{ $user->matricula }}" maxlength="25">
		@if($errors->has('matricula'))
		<div class="invalid-feedback">
			@error('matricula') {{ $message }} @enderror
		</div>
		@endif
	
		<label for="business" class="mb-2">Empresa</label>
		<select class="form-select @if($errors->has('business')) is-invalid @endif mb-3" name="business">
			@foreach($businesss as $business)
				<option value="{{ $business->id }}" @if($user->business_id == $business->id) selected="selected" @endif>{{ $business->name }}</option>
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
				<option value="{{ $position->id }}" @if($user->position_id == $position->id) selected="selected" @endif>{{ $position->name }}</option>
			@endforeach
		</select>
		@if($errors->has('position'))
		<div class="invalid-feedback">
			@error('position') {{ $message }} @enderror
		</div>
		@endif
	
		<label for="role" class="mb-2">Tipo de usuário</label>
		<select class="form-select @if($errors->has('role')) is-invalid @endif mb-3" name="role">
			<option value="0" @if($user->role == 0) selected="selected" @endif>Super usuário</option>
			<option value="1" @if($user->role == 1) selected="selected" @endif>Administrador</option>
			<option value="2" @if($user->role == 2) selected="selected" @endif>Empregado</option>
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
	
		<label for="password_confirmation" class="mb-2">Confirme sua senha</label>
		<input type="password" class="form-control @if($errors->has('password')) is-invalid @endif mb-3" placeholder="Confirmar senha" name="password_confirmation" required maxlength="191">
		@if($errors->has('password'))
		<div class="invalid-feedback">
			@error('password') {{ $message }} @enderror
		</div>
		@endif
		
		<button class="btn btn-secundary-m mt-2">Salvar Alterações</button>
	</form>
</div>

<div class="modal" tabindex="-1" id="modal1">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title">Modal title</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
			<p>Modal body text goes here.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
			<button type="button" class="btn btn-secundary-m">Salvar</button>
		  </div>
		</div>
	  </div>
	</div>

@endsection