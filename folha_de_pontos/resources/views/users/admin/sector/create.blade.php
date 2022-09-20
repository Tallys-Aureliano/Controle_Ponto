@extends('layouts.admin')

@section('title')
Novo setor
@endsection

@section('content-admin')

<h1 class="text-center">Novo setor</h1>

<form action="{{ route('admin.sector.store') }}" method="POST">
	@csrf
	<input type="text" class="form-control" name="name" maxlength="191" required autocomplete="false">
	<div class="text-center">
		<button class="btn btn-secundary-m mt-3">Criar</button>
	</div>
</form>

@endsection