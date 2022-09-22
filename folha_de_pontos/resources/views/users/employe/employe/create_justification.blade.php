@extends('layouts.dashboard')

@section('title')
Criar justificativa
@endsection

@section('content-dashboard')

	<h1 class="text-center">Criar justificativa</h1>

	<div class="mt-5">
		<form action="{ route('employe.justification.store') }}" method="POST" class="--box-form mx-auto">
			@csrf
			<div>
				<label for="date">Data</label>
				<input type="date" class="form-control @if($errors->has('date')) is-invalid @endif mb-3" name="date">
			@if($errors->has('date'))
		        <div class="invalid-feedback">
		            @error('date') {{ $message }} @enderror
		        </div>
        	@endif
			</div>

			<div class="mb-3">
				<label for="formFile">Escolha uma foto</label>
				<input class="form-control @if($errors->has('file')) is-invalid @endif" name="file" type="file" accept=".doc,.docx,.pdf,image/*" id="formFile" disabled>
				@if($errors->has('file'))
		        <div class="invalid-feedback">
		            @error('file') {{ $message }} @enderror
		        </div>
        		@endif
			</div>
			<label for="floatingTextarea2">Comentário</label>
			<div class="form">
				<textarea class="form-control @if($errors->has('comment')) is-invalid @endif mb-3" name="comment" placeholder="Escreva um comentário.." id="floatingTextarea2" style="height: 100px" required=""></textarea>
				@if($errors->has('comment'))
		        <div class="invalid-feedback">
		            @error('comment') {{ $message }} @enderror
		        </div>
        		@endif
			</div>
				<button class="btn btn-primary-m mt-3 ">Enviar justificativa</button>	
		</form>
	</div>
	
@endsection
