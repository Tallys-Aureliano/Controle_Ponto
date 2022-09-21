@extends('layouts.dashboard')

@section('title')
Criar justificativa
@endsection

@section('content-dashboard')

	<h1 class="text-center">Criar justificativa</h1>

	<div class="mt-5">
		<form action="" method="POST" class="--box-form mx-auto">
			<div>
				<label for="date">Data</label>
				<input type="date" class="form-control" name="date">
			</div>
			<div class="mb-3">
				<label for="formFile">Escolha uma foto</label>
				<input class="form-control" type="file" accept=".doc,.docx,.pdf,image/*" id="formFile">
			</div>
			<label for="floatingTextarea2">Comentário</label>
			<div class="form">
				<textarea class="form-control" placeholder="Escreva um cometário" id="floatingTextarea2" style="height: 100px"></textarea>
			</div>
			<div class="text-start ">
				<button class="btn btn-primary-m mt-2 ">Enviar justificativa</button>	
			</div>
		</form>
	</div>
	
@endsection
