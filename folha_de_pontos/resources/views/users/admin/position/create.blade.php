@extends('layouts.admin')

@section('title')
Criar cargo
@endsection

@section('content-admin')

<h1 class="text-center">Criar cargo</h1>

<form action="{{ route('admin.position.store') }}" method="POST">
	@csrf
	<input type="text" class="form-control form-control-sm" name="name" required placeholder="Nome do cargo">
	<select class="form-select" name="sector">
		@foreach ($sectors as $sector)
			<option value="{{ $sector->id }}">{{ $sector->name }}</option>
		@endforeach
	</select>

	<button class="btn btn-sm btn-outline-success">Criar</button>

</form>

@endsection