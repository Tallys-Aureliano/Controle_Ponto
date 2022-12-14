@extends('layouts.admin')

@section('title')
Criar empresa
@endsection

@section('content-admin')
<nav aria-label="breadcrumb" class="breadcrumb-nav navbar navbar-expand-lg">
  <div class="container-fluid">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.business.list') }}">Empresas</a></li>
      <li class="breadcrumb-item active" aria-current="page">Criar</li>
    </ol>
  </div>
</nav>

	<h1 class="text-center">CRIAR EMPRESA</h1>
	<div class="mt-5 --box-form mx-auto">
		<form action="{{ route('admin.business.store') }}" method="POST">
			@csrf
			<div>
				<label for="name" class="mb-2">Nome</label>
				<input type="text" class="form-control mb-3" value="{{ old('name') }}" name="name" placeholder="Nome da empresa" required>
				@if($errors->has('name'))
					<div class="invalid-feedback">
						@error('name') {{ $message }} @enderror
					</div>
				@endif
			</div>
			<button class="btn btn-primary-m mt-2">Criar Empresa</button>
		</form>
	</div>
@endsection
