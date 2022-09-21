@extends('layouts.admin')

@section('title')
Criar ponto
@endsection

@section('content-admin')

<h1 class="text-center">Criar ponto</h1>

<form action="{{ route('admin.point.store') }}" method="POST">
	@csrf
	<input type="time" class="form-control @if($errors->has('entry_time')) is-invalid @endif" placeholder="Entrada" name="entry_time" step="3" required>
	@if($errors->has('entry_time'))
	<div class="invalid-feedback">
        @error('entry_time') {{ $message }} @enderror
    </div>
    @endif

    <input type="time" class="form-control @if($errors->has('exit_time')) is-invalid @endif" placeholder="Saida" name="exit_time" step="3">
	@if($errors->has('entry_time'))
	<div class="invalid-feedback">
        @error('exit_time') {{ $message }} @enderror
    </div>
    @endif

    <input type="date" class="form-control @if($errors->has('date')) is-invalid @endif" placeholder="Data" name="date" required>
	@if($errors->has('date'))
	<div class="invalid-feedback">
        @error('date') {{ $message }} @enderror
    </div>
    @endif

    <label for="name">Funcionários</label>
    <select name="user" class="form-select">
    	@foreach($users as $user)
    		@if($user->role != 0)
    			<option value="{{ $user->id }}">{{ $user->name }}</option>
    		@endif
    	@endforeach
    </select>

    <button class="btn btn-sm btn-outline-success">Salvar</button>

</form>

@endsection