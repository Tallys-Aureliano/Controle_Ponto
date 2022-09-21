@extends('layouts.dashboard')

@section('title')
Criar justificativa
@endsection

@section('content-dashboard')

	<h1 class="text-center">Criar justificativa</h1>

	<div class="mt-5">
		<form action="" method="POST">
			
			<input type="date" class="form-control mb-3" name="date">
			<div class="mb-3">
				<input class="form-control" type="file" accept=".doc,.docx,.pdf,image/*" id="formFile">
			</div>
			<div class="form-floating">
				<textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
				<label for="floatingTextarea2">Escreva um comentário</label>
			</div>
			<div class="text-center --form-authentication-button ">
				<button class="btn btn-lg btn-primary-m mt-3 ">Enviar justificativa</button>	
			</div>
		</form>
	</div>
	
@endsection
