@extends('layouts.dashboard')

@section('title')
Relatório geral
@endsection

@section('content-dashboard')

	<h1 class="text-center">Relatório geral</h1>

	<div class="--form-filter mt-5 mb-3">
	<form action="" class="get">
		<div class="d-flex flex-wrap gap-3 mt-5">
			<select class="form-select form-control-sm shadow-sm" aria-label="Funcionario">
				<option selected>Mês</option>
				<option value="1">Janeiro</option>
				<option value="2">Fevereiro</option>
				<option value="2">...</option>
			</select>
			
			<button class="btn btn-sm btn-outline-success shadow-md" aria-placeholder="Pesquisar">Pesquisar</button>
		</div>
	</form>
</div>

	<button class="btn btn-success btn-sm">Gerar</button>

	<div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Nome</th>
				<th scope="col">Matricula</th>
				<th scope="col">Email</th>
				<th scope="col">Cargo</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
			@if(!$user->role == 0)
			<tr>
				<td>{{ $user->name }}</td>
				<td>
					@if($user->matricula)
						{{ $user->matricula }}
					@else
						vazio
					@endif
				</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->position->name }}</td>
			</tr>
			@endif
			@endforeach
			
		</tbody>
	</table>
</div>

@endsection