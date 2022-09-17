@extends('base')
@section('title')
Lista de Funcionários
@endsection
@section('content')

<h1 class="mt-5 text-center">Lista de Funcionários</h1>
<main class="container mt-2">
	<div class="--form-filter mt-5 mb-3">
		<form action="" class="get">
			<div class="d-flex flex-wrap gap-3">
				<select class="form-select form-control-sm shadow-sm" aria-label="Funcionario">
					<option selected>Mes</option>
					<option value="1">Janeiro</option>
					<option value="2">fevereuro</option>
					<option value="3">Março</option>
				</select>
				<select class="form-select form-control-sm shadow-sm" aria-label="Situação">
					<option selected>Situação</option>
					<option value="1">Extra</option>
					<option value="2">Falta</option>
					<option value="3">Atraso</option>
				</select>
				<button class="btn btn-sm btn-outline-success shadow-md" aria-placeholder="Pesquisar">Pesquisar</button>
			</div>
		</form>
	</div>
	<div class="--table-data table-responsive mt-3">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Nome</th>
					<th scope="col">Matricula</th>
					<th scope="col">Cargo</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr>
						<td>{{ $user->name }}</td>
						<td>{{ $user->matricula }}</td>
						<td>{{ $user->position->name }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="mt-5 mb-5" id="detalhes">
		<h2 class="text-center mb-5">Detalhes Gerais</h2>
		<div class="col-7 offset-2 col-md-10 offset-md-1" id="cards-func">
			<div class="row gx-5">
				<div class="col-12 col-md-4">
					<div class="card mb-5 text-center">
						<div class="card-body mb-2">
							<p class="card-title color-font-secundary">Atrasos</p>
							<h1 class="card-text text-start text-center">5h</h1>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4">
					<div class="card mb-5 text-center">
						<div class="card-body mb-2">
							<p class="card-title color-font-secundary">Carga Horária</p>
							<h1 class="card-text text-start text-center">120H</h1>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4">
					<div class="card mb-5 text-center">
						<div class="card-body mb-2">
							<p class="card-title color-font-secundary">Horas Extras</p>
							<h1 class="card-text text-start text-center">10h</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	@endsection