@extends('layouts.admin')

@section('title')
Editar ponto
@endsection

@section('content-admin')

<h1 class="text-center">Editar Ponto</h1>

<div class="mt-5">
    
    <form action="{{ route('admin.point.update', ['id'=>$point->id]) }}" method="POST">
        @csrf
        <input type="time" class="form-control @if($errors->has('entry_time')) is-invalid @endif" placeholder="Entrada" name="entry_time" value="{{ $point->entry_time }}" step="2" required>
        @if($errors->has('entry_time'))
        <div class="invalid-feedback">
            @error('entry_time') {{ $message }} @enderror
        </div>
        @endif
    
        <input type="time" class="form-control @if($errors->has('exit_time')) is-invalid @endif mt-2" step="2" placeholder="Saida" name="exit_time" value="{{ $point->exit_time }}">
        @if($errors->has('entry_time'))
        <div class="invalid-feedback">
            @error('exit_time') {{ $message }} @enderror
        </div>
        @endif
    
        <input type="date" class="form-control @if($errors->has('date')) is-invalid @endif mt-2" placeholder="Data" name="date" value="{{ $point->date }}" required>
        @if($errors->has('date'))
        <div class="invalid-feedback">
            @error('date') {{ $message }} @enderror
        </div>
        @endif
    
        <label for="name" class="mt-2">Funcionário</label>
        <input type="text" class="form-control mt-2" id="name" value="{{ $point->users->name }}" disabled>

        <div class="text-center">
            <button class="btn btn-secundary-m mt-3">Salvar Alterações</button>
        </div>
    
    </form>

</div>


@endsection