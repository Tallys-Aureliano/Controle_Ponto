@extends('layouts.dashboard')

@section('title')
Relatório individual
@endsection

@section('content-dashboard')

	<h1 class="text-center">Relatório individual</h1>

	<div class="--form-filter mt-5 mb-3">
	<form action="" class="get">
		<div class="d-flex flex-wrap gap-3 mt-5 --form-authentication">
			<label for="">Consulta:</label>
			<input class="form-control form-control-lg" type="text" placeholder="Nome ou Matricula" name="consult">
			<label for="">Consultar Por:</label>
			<select class="form-select form-control-sm shadow-sm" aria-label="Funcionario">
				<option selected>Tipo</option>
				<option value="1">Nome</option>
				<option value="2">Matricula</option>
			</select>
			
			<button class="btn btn-sm btn-secundary-m shadow-md" aria-placeholder="Pesquisar">Pesquisar</button>
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
				<th></th>
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
				<td>
					<button class="btn btn-primary-m mx-auto btn-sm">Gerar Relatório</button>
				</td>
			</tr>
			@endif
			@endforeach
			
		</tbody>
	</table>
</div>
<nav aria-label="...">
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