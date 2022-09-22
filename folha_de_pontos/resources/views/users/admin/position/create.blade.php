@extends('layouts.admin')

@section('title')
Criar cargo
@endsection

@section('content-admin')
<nav aria-label="breadcrumb" class="breadcrumb-nav navbar navbar-expand-lg">
  <div class="container-fluid">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.position.list') }}">Cargos</a></li>
      <li class="breadcrumb-item active" aria-current="page">Criar</li>
    </ol>
  </div>
</nav>


<h1 class="text-center">CRIAR CARGO</h1>

<div class="mt-5 mx-auto --box-form">

	<form action="{{ route('admin.position.store') }}" method="POST">
		@csrf
		<label for="name" class="mb-2">Nome do Cargo</label>
		<input type="text" class="form-control @if($errors->has('name')) is-invalid @endif mb-3" name="name" required value="{{ old('name') }}" placeholder="Nome do cargo">
		@if($errors->has('name'))
		<div class="invalid-feedback">
		    @error('name') {{ $message }} @enderror
		</div>
    	@endif

		<label for="sector" class="mb-2">Setor</label>
		<select class="form-select mb-3" name="sector">
			@foreach ($sectors as $sector)
				<option value="{{ $sector->id }}">{{ $sector->name }}</option>
			@endforeach
		</select>
		<button class="btn btn-secundary-m mt-2">Criar Cargo</button>
	</form>
</div>

@endsection