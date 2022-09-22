@extends('layouts.dashboard')

@section('title')
Editar funcionario
@endsection

@section('content-dashboard')

<h1 class="text-center">Editar funcionario</h1>

<form action="{{ route('manager.update.employe', ['id'=>$user->id]) }}" method="POST" class="container mt-5 --box-form" enctype="multipart/form-data">
	@csrf
	<label for="inputGroupFile01">Escolha uma foto</label>
	<div class="input-group mb-3 ">
		<input type="file" value="@if($user->photo){{ route('view.profile.photo', ['file_name'=>$user->photo])}}@endif" class="form-control @if($errors->has('image')) is-invalid @endif" name="image" accept="image/*">
	@if($errors->has('image'))
		<div class="invalid-feedback">
			@error('image') {{ $message }} @enderror
		</div>
	@endif
	</div>
	
	
	<label for="name">Nome</label>
	<div class="input-group mb-3 ">
		<input type="text" name="name" class="form-control @if($errors->has('name')) is-invalid @endif" placeholder="Nome" value="@if(old('name')) {{old('name')}} @else {{$user->name}} @endif" required>
	@if($errors->has('name'))
		<div class="invalid-feedback">
			@error('name') {{ $message }} @enderror
		</div>
	@endif
	</div>
	
	<label for="email">Email</label>
	<div class="input-group mb-3 ">
	  <input type="email" class="form-control @if($errors->has('email')) is-invalid @endif" name="email" placeholder="Email" value="@if(old('email')) {{old('email')}} @else {{$user->email}} @endif" required>
	  @if($errors->has('email'))
		<div class="invalid-feedback">
			@error('email') {{ $message }} @enderror
		</div>
	@endif
	</div>

	<label for="matricula">Matricula</label>
	<div class="">
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

	<label for="password">Senha</label>
	<div class="">
		<input type="password" class="form-control @if($errors->has('password')) is-invalid @endif mb-3 --form-authentication" name="password" placeholder="Senha" minlength="8" required>
		@if($errors->has('password'))
		<div class="invalid-feedback">
			@error('password') {{ $message }} @enderror
		</div>
		@endif
	</div>

	<label for="password-confirmatio">Confirme sua senha</label>
	<div class="">
		<input type="password" class="form-control mb-3 @if($errors->has('password_confirmation')) is-invalid @endif --form-authentication" name="password_confirmation" placeholder="Confirmar senha" required>
		@if($errors->has('password_confirmation'))
		<div class="invalid-feedback">
			@error('password_confirmation') {{ $message }} @enderror
		</div>
		@endif
	</div>

	<div class="">
		<button class="btn btn-secundary-m mt-2">Salvar Alterações</button>
	</div>
</form>


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