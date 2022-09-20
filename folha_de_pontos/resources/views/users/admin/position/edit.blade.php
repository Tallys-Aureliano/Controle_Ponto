@extends('layouts.admin')

@section('title')
Editar cargo
@endsection

@section('content-admin')
<h1 class="text-center">EDITAR CARGO</h1>

<div class="mt-5">

	<form action="{{ route('admin.position.update', ['id' => $position->id]) }}" method="POST">
		@csrf
		<input type="text" class="form-control form-control" name="name" required placeholder="Nome do cargo" value="{{ $position->name }}">
		<select class="form-select mt-2" name="sector">
			@foreach ($sectors as $sector)
				<option value="{{ $sector->id }}"
					@if($sector->id == $position->sectors_id)
					selected="selected" 
					@endif>{{ $sector->name }}</option>
			@endforeach
		</select>
		<div class="text-center">
			<button class="btn btn-secundary-m mt-3">Salvar Alterações</button>
		</div>
	
	</form>
</div>

@endsection