@extends('layouts.admin')

@section('title')
Criar empresa
@endsection

@section('content-admin')

	<h1 class="text-center">CRIAR EMPRESA</h1>

	<form action="{{ route('admin.business.store') }}" method="POST">
		@csrf
		<input type="text" class="form-control mb-3" name="name" placeholder="Nome da empresa" required>
		<button class="btn btn-sm btn-outline-success">Adicionar</button>
	</form>


@endsection