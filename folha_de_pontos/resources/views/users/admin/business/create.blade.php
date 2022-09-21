@extends('layouts.admin')

@section('title')
Criar empresa
@endsection

@section('content-admin')
	<h1 class="text-center">CRIAR EMPRESA</h1>
	<div class="mt-5">
		<form action="{{ route('admin.business.store') }}" method="POST">
			@csrf
			<input type="text" class="form-control mb-3" value="{{ old('name') }}" name="name" placeholder="Nome da empresa" required>
			@if($errors->has('name'))
		        <div class="invalid-feedback">
		            @error('name') {{ $message }} @enderror
		        </div>
        	@endif

			<div class="text-center">
				<button class="btn btn-secundary-m mt-3">Criar Empresa</button>
			</div>
		</form>
	</div>
@endsection
