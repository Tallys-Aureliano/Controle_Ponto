@extends('layouts.admin')

@section('title')
Criar cargo
@endsection

@section('content-admin')

<h1 class="text-center">CRIAR CARGO</h1>

<div class="mt-5">

	<form action="{{ route('admin.position.store') }}" method="POST">
		@csrf
		<input type="text" class="form-control @if($errors->has('name')) is-invalid @endif" name="name" required value="{{ old('name') }}" placeholder="Nome do cargo">
		@if($errors->has('name'))
		<div class="invalid-feedback">
		    @error('name') {{ $message }} @enderror
		</div>
    	@endif


		<select class="form-select mt-2" name="sector">
			@foreach ($sectors as $sector)
				<option value="{{ $sector->id }}">{{ $sector->name }}</option>
			@endforeach
		</select>
		<div class="text-center">
			<button class="btn btn-secundary-m mt-3">Criar Cargo</button>
		</div>
	</form>
</div>

@endsection