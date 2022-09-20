@extends('layouts.admin')

@section('title')
Editar cargo
@endsection

@section('content-admin')

<form action="{{ route('admin.position.update', ['id' => $position->id]) }}" method="POST">
	@csrf
	<input type="text" class="form-control form-control-sm" name="name" required placeholder="Nome do cargo" value="{{ $position->name }}">
	<select class="form-select" name="sector">
		@foreach ($sectors as $sector)
			<option value="{{ $sector->id }}"
				@if($sector->id == $position->sectors_id)
				selected="selected" 
				@endif>{{ $sector->name }}</option>
		@endforeach
	</select>

	<button class="btn btn-sm btn-outline-success">Salvar</button>

</form>

@endsection