@extends('layouts.admin')

@section('title')
Editar ponto
@endsection

@section('content-admin')

<h1 class="text-center">Editar Ponto</h1>

<form action="{{ route('admin.point.update', ['id'=>$point->id]) }}" method="POST">
	@csrf
	<input type="time" class="form-control @if($errors->has('entry_time')) is-invalid @endif" placeholder="Entrada" name="entry_time" value="{{ $point->entry_time }}" step="2" required>
	@if($errors->has('entry_time'))
	<div class="invalid-feedback">
        @error('entry_time') {{ $message }} @enderror
    </div>
    @endif

    <input type="time" class="form-control @if($errors->has('exit_time')) is-invalid @endif" step="2" placeholder="Saida" name="exit_time" value="{{ $point->exit_time }}">
	@if($errors->has('entry_time'))
	<div class="invalid-feedback">
        @error('exit_time') {{ $message }} @enderror
    </div>
    @endif

    <input type="date" class="form-control @if($errors->has('date')) is-invalid @endif" placeholder="Data" name="date" value="{{ $point->date }}" required>
	@if($errors->has('date'))
	<div class="invalid-feedback">
        @error('date') {{ $message }} @enderror
    </div>
    @endif

    <label for="name">Funcionário</label>
    <input type="text" class="form-control" id="name" value="{{ $point->users->name }}" disabled>

    <button class="btn btn-sm btn-outline-success">Salvar</button>

</form>


@endsection