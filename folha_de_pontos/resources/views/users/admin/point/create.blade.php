@extends('layouts.admin')

@section('title')
Criar ponto
@endsection

@section('content-admin')

<h1 class="text-center">Criar ponto</h1>

<div class="mt-5 mx-auto --box-form">

    <form action="{{ route('admin.point.store') }}" method="POST">
        @csrf
        <label for="entry_tyme" class="mb-2">Entrada</label>
        <input type="time" class="form-control @if($errors->has('entry_time')) is-invalid @endif mb-3" placeholder="Entrada" name="entry_time" step="3" required>
        @if($errors->has('entry_time'))
        <div class="invalid-feedback">
            @error('entry_time') {{ $message }} @enderror
        </div>
        @endif
    
        <label for="exit_time" class="mb-2">Saída</label>
        <input type="time" class="form-control @if($errors->has('exit_time')) is-invalid @endif mb-3" placeholder="Saida" name="exit_time" step="3">
        @if($errors->has('entry_time'))
        <div class="invalid-feedback">
            @error('exit_time') {{ $message }} @enderror
        </div>
        @endif
    
        <label for="date" class="mb-2">Data</label>
        <input type="date" class="form-control @if($errors->has('date')) is-invalid @endif mb-3" placeholder="Data" name="date" required>
        @if($errors->has('date'))
        <div class="invalid-feedback">
            @error('date') {{ $message }} @enderror
        </div>
        @endif
    
        
        <label for="user" class="mb-2">Funcionário</label>
        <select name="user" class="form-select mb-3">
            @foreach($users as $user)
                @if($user->role != 0)
                    <option value="{{ $user->id }}" >{{ $user->name }}</option>
                @endif
            @endforeach
        </select>
        <button class="btn btn-secundary-m mt-2">Criar Ponto</button>
    
    </form>
</div>

@endsection