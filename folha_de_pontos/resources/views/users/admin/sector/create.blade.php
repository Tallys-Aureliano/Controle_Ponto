@extends('layouts.admin')

@section('title')
Novo setor
@endsection

@section('content-admin')

<h1 class="text-center">Novo setor</h1>

<div class="mt-5 mx-auto --box-form">
	<form action="{{ route('admin.sector.store') }}" method="POST">
		@csrf
		<label for="name" class="mb-2">Nome</label>
		<input type="text" class="form-control @if($errors->has('name')) is-invalid @endif" name="name" value="{{ old('name') }}" maxlength="191" required placeholder="Nome do setor" autocomplete="false">
		@if($errors->has('name'))
			<div class="invalid-feedback">
				@error('name') {{ $message }} @enderror
			</div>
		@endif
		<button class="btn btn-secundary-m mt-3">Criar Setor</button>
	</form>
</div>

@endsection