@extends('layouts.admin')

@section('title')
Novo setor
@endsection

@section('content-admin')

<h1 class="text-center">Novo setor</h1>

<form action="{{ route('admin.sector.store') }}" method="POST">
	@csrf
	<input type="text" class="form-control" name="name" maxlength="191" required autocomplete="false">
	<button class="btn btn-sm btn-outline-success">Criar</button>
</form>

@endsection