@extends('layouts.dashboard')

@section('title')
Criar justificativa
@endsection

@section('content-dashboard')

	<h1 class="text-center">Criar justificativa</h1>

	<form action="" method="POST">
		<input type="date" class="form-control mb-3" name="date">
		<div class="mb-3">
		  <label for="formFile" class="form-label">Default file input example</label>
		  <input class="form-control" type="file" accept=".doc,.docx,.pdf,image/*" id="formFile">
		</div>
		<textarea class="mb-3" name="comment"></textarea>
		<button class="btn btn-outline-primary">Enviar justificativa</button>

	</form>
	
@endsection