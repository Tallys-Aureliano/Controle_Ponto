@extends('layouts.admin')

@section('title')
Setor: {{ $sector->name }}
@endsection

@section('content-admin')

<h1 class="text-center">Setor: {{ $sector->name }}</h1>

<div class="mt-5">
	<form action="{{ route('admin.sector.update', ['id'=>$sector->id]) }}" method="POST">
		@csrf
		<input type="text" class="form-control @if($errors->has('name')) is-invalid @endif" name="name" maxlength="191" value="{{ $sector->name }}" required autocomplete="false">
		@if($errors->has('name'))
		<div class="invalid-feedback">
		    @error('name') {{ $message }} @enderror
		</div>
    	@endif

		<div class="text-center">
			<button class="btn btn-secundary-m mt-3">Salvar Alterações</button>
		</div>
	</form>
</div>

@endsection