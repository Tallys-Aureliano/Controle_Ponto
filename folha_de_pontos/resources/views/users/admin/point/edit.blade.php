@extends('layouts.admin')

@section('title')
Editar ponto
@endsection

@section('content-admin')

<h1 class="text-center">Editar Ponto</h1>

<div class="mt-5 mx-auto --box-form">
    
    <form action="{{ route('admin.point.update', ['id'=>$point->id]) }}" method="POST">
        @csrf
        <label for="entry_time" class="mb-2">Entrada</label>
        <input type="time" class="form-control @if($errors->has('entry_time')) is-invalid @endif mb-3" placeholder="Entrada" name="entry_time" value="{{ $point->entry_time }}" step="2" required>
        @if($errors->has('entry_time'))
        <div class="invalid-feedback">
            @error('entry_time') {{ $message }} @enderror
        </div>
        @endif
    
        <label for="exit_time" class="mb-2">Saída</label>
        <input type="time" class="form-control @if($errors->has('exit_time')) is-invalid @endif mb-3" step="2" placeholder="Saida" name="exit_time" value="{{ $point->exit_time }}">
        @if($errors->has('entry_time'))
        <div class="invalid-feedback">
            @error('exit_time') {{ $message }} @enderror
        </div>
        @endif
    
        <label for="date" class="mb-2">Entrada</label>
        <input type="date" class="form-control @if($errors->has('date')) is-invalid @endif mb-3" placeholder="Data" name="date" value="{{ $point->date }}" required>
        @if($errors->has('date'))
        <div class="invalid-feedback">
            @error('date') {{ $message }} @enderror
        </div>
        @endif
    
        <label for="name" class="mb-2">Funcionário</label>
        <input type="text" class="form-control mb-3" id="name" value="{{ $point->users->name }}" disabled>

        <button class="btn btn-secundary-m mt-2">Salvar Alterações</button>
    </form>

</div>

<div class="modal" tabindex="-1" id="modal1">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title">Modal title</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
			<p>Modal body text goes here.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
			<button type="button" class="btn btn-secundary-m">Salvar</button>
		  </div>
		</div>
	  </div>
	</div>


@endsection