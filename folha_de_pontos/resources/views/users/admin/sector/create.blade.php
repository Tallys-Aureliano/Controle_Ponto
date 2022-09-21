@extends('layouts.admin')

@section('title')
Novo setor
@endsection

@section('content-admin')

<h1 class="text-center">Novo setor</h1>

<form action="{{ route('admin.sector.store') }}" method="POST">
	@csrf
	<input type="text" class="form-control @if($errors->has('name')) is-invalid @endif" name="name" value="{{ old('name') }}" maxlength="191" required placeholder="Nome do setor" autocomplete="false">
	@if($errors->has('name'))
		<div class="invalid-feedback">
		    @error('name') {{ $message }} @enderror
		</div>
    @endif

	<div class="text-center">
		<button class="btn btn-secundary-m mt-3">Criar</button>
	</div>
</form>

@endsection