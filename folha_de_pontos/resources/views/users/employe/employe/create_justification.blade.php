@extends('layouts.dashboard')

@section('title')
Criar justificativa
@endsection

@section('content-dashboard')

	<h1 class="text-center">Criar justificativa</h1>

	<div class="mt-5">
		<form action="{{ route('employe.justification.store') }}" method="POST">
			@csrf
			<input type="date" class="form-control @if($errors->has('date')) is-invalid @endif mb-3" name="date">
			@if($errors->has('date'))
		        <div class="invalid-feedback">
		            @error('date') {{ $message }} @enderror
		        </div>
        	@endif

			<div class="mb-3">
				<input class="form-control @if($errors->has('file')) is-invalid @endif" name="file" type="file" accept=".doc,.docx,.pdf,image/*" id="formFile" disabled>
				@if($errors->has('file'))
		        <div class="invalid-feedback">
		            @error('file') {{ $message }} @enderror
		        </div>
        		@endif
			</div>
			<div class="form-floating">
				<textarea class="form-control @if($errors->has('comment')) is-invalid @endif" name="comment" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required=""></textarea>
				<label for="floatingTextarea2">Escreva um comentário</label>
				@if($errors->has('comment'))
		        <div class="invalid-feedback">
		            @error('comment') {{ $message }} @enderror
		        </div>
        		@endif
			</div>
			<div class="text-center --form-authentication-button ">
				<button class="btn btn-lg btn-primary-m mt-3 ">Enviar justificativa</button>	
			</div>
		</form>
	</div>
	
@endsection
