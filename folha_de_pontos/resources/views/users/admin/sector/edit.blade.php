@extends('layouts.admin')

@section('title')
Setor: {{ $sector->name }}
@endsection

@section('content-admin')

<h1 class="text-center">Setor: {{ $sector->name }}</h1>

<form action="{{ route('admin.sector.update', ['id'=>$sector->id]) }}" method="POST">
	@csrf
	<input type="text" class="form-control" name="name" maxlength="191" value="{{ $sector->name }}" required autocomplete="false">
	<button class="btn btn-sm btn-outline-success">Salvar</button>
</form>

@endsection