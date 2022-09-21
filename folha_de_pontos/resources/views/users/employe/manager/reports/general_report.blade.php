@extends('layouts.dashboard')

@section('title')
Relatório geral
@endsection

@section('content-dashboard')

	<h1 class="text-center">Relatório geral</h1>

	<div class="--form-filter mt-5 mb-3">
	<form action="" class="get" class="-form-authentication">
		<div class="d-flex flex-wrap gap-3 mt-5">
			<label for="">Filtro:</label>
			<select class="form-select form-control-sm shadow-sm" aria-label="Funcionario">
				<option selected>Mês</option>
				<option value="1">Janeiro</option>
				<option value="2">Fevereiro</option>
				<option value="2">...</option>
			</select>
			
			<button class="btn btn-sm btn-primary-m" aria-placeholder="Pesquisar">Pesquisar</button>
		</div>
	</form>
</div>
	<button class="btn btn-primary-m mt-2">Gerar Relatório Geral</button>
	<div class="table-responsive mt-3 rounded-2 shadow-sm">
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
</div>
<nav aria-label="..." class="mt-2">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled rounded">
      <a class="page-link">Anterior</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Próxima</a>
    </li>
  </ul>
</nav>

@endsection