@extends('layouts.dashboard')

@section('title')
Lista de funcionários
@endsection

@section('content-dashboard')
<h1 class="text-center">Lista de Funcionários</h1>

<div class="--form-filter mt-5 mb-3">
	<form action="" class="get">
		<div class="d-flex flex-wrap gap-3 mt-5">
			<label for="">Consulta:</label>
			<input class="form-control form-control-lg" type="text" placeholder="Nome ou Matricula" name="consult">
			<label for="">Por</label>
			<select class="form-select form-control-sm shadow-sm" aria-label="Funcionario">
				<option selected>Tipo</option>
				<option value="1">Nome</option>
				<option value="2">Matricula</option>
			</select>
			
			<button class="btn btn-sm btn-outline-success shadow-md" aria-placeholder="Pesquisar">Pesquisar</button>
		</div>
	</form>
</div>

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
				<td><a href="{{ route('manager.show.employe', ['id'=>$user->id]) }}">{{ $user->name }}</a></td>
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