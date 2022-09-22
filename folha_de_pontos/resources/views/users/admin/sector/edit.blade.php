@extends('layouts.admin')

@section('title')
Setor: {{ $sector->name }}
@endsection

@section('content-admin')
<nav aria-label="breadcrumb" class="breadcrumb-nav navbar navbar-expand-lg">
  <div class="container-fluid">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.sector.list') }}">Setores</a></li>
      <li class="breadcrumb-item active" aria-current="page">Editar</li>
    </ol>
  </div>
</nav>



<h1 class="text-center">Setor: {{ $sector->name }}</h1>

<div class="mt-5 mx-auto --box-form">
	<form action="{{ route('admin.sector.update', ['id'=>$sector->id]) }}" method="POST">
		@csrf
		<label for="name" class="mb-2">Nome</label>
		<input type="text" class="form-control @if($errors->has('name')) is-invalid @endif mb-3" name="name" maxlength="191" value="{{ $sector->name }}" required autocomplete="false">
		@if($errors->has('name'))
		<div class="invalid-feedback">
		    @error('name') {{ $message }} @enderror
		</div>
    	@endif
		<button class="btn btn-secundary-m mt-2">Salvar Alterações</button>
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