@extends('layouts.admin')

@section('title')
Editar empresa
@endsection

@section('content-admin')

	<h1 class="text-center">EDITAR EMPRESA</h1>

	<div class="mt-5">
		<form action="{{ route('admin.business.update', ['id' => $business->id]) }}" method="POST" class="--box-form mx-auto">
			@csrf
			<label for="name" class="mb-2">Nome da empresa</label>
			<input type="text" class="form-control mb-3" name="name" placeholder="Nome da empresa" required value="{{ $business->name }}">

			<label for="active" class="mb-2">Situação</label>
			<select class="form-select mb-3" name="active">
			  <option value="1">Ativa</option>
			  <option value="0"@if(!$business->active)selected="selected"@endif >Desativada</option>
			</select>
			<button class="btn btn-secundary-m mt-2" data-bs-toggle="modal" data-bs-target="#modal1" >Salvar Alterações</button>
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
