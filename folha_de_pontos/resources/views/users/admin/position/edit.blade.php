@extends('layouts.admin')

@section('title')
Editar cargo
@endsection

@section('content-admin')
<h1 class="text-center">EDITAR CARGO</h1>

<div class="mt-5 mx-auto --box-form">

	<form action="{{ route('admin.position.update', ['id' => $position->id]) }}" method="POST">
		@csrf
		<label for="name" class="mb-2">Nome do Cargo</label>
		<input type="text" class="form-control form-control mb-3" name="name" required placeholder="Nome do cargo" value="{{ $position->name }}">
		<label for="sector" class="mb-2">Setor</label>
		<select class="form-select mb-3" name="sector">
			@foreach ($sectors as $sector)
				<option value="{{ $sector->id }}"
					@if($sector->id == $position->sectors_id)
					selected="selected" 
					@endif>{{ $sector->name }}</option>
			@endforeach
		</select>
		<button class="btn btn-secundary-m mt-3">Salvar Alterações</button>
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