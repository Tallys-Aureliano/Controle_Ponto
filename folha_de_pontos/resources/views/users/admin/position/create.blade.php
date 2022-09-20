@extends('layouts.admin')

@section('title')
Criar cargo
@endsection

@section('content-admin')

<h1 class="text-center">CRIAR CARGO</h1>

<div class="mt-5">

	<form action="{{ route('admin.position.store') }}" method="POST">
		@csrf
		<input type="text" class="form-control form-control" name="name" required placeholder="Nome do cargo">
		<select class="form-select mt-2" name="sector">
			@foreach ($sectors as $sector)
				<option value="{{ $sector->id }}">{{ $sector->name }}</option>
			@endforeach
		</select>
		<div class="text-center">
			<button class="btn btn-secundary-m mt-3">Criar</button>
		</div>
	</form>
</div>

@endsection