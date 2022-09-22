@extends('layouts.dashboard')

@section('title')
Relatório individual
@endsection

@section('content-dashboard')

	<h1 class="text-center">Relatório individual</h1>

	<div class="--form-filter mt-5 mb-3 --box-form">
	<form action="" class="get" class="--box-authentication">
		<div class="d-flex flex-column gap-3 mt-5">
			<div class="text-start">
				<label for="consult">Nome ou Matricula</label>
				<input class="form-control" type="text" placeholder="Nome ou Matricula" name="consult">
			</div>
			<div class="d-flex align-items-center gap-3">
				<span>Consulta por:</span>
					<select class="form-select shadow-sm" aria-label="Funcionario">
						<option selected>Tipo</option>
						<option value="1">Nome</option>
						<option value="2">Matricula</option>
					</select>
					
					<button class="btn btn-secondary shadow-md" aria-placeholder="Pesquisar">Pesquisar</button>
			</div>
		</div>
	</form>
	<hr>
</div>

	<h3>Total de funcionários: {{$users->count()}}</h3>
	<div class="table-responsive rounded-2 shadow-sm mt-5">

	<table class="table">
		<thead>
			<tr>
				<th scope="col">Nome</th>
				<th scope="col">Matricula</th>
				<th scope="col">Email</th>
				<th scope="col">Cargo</th>
				<th scope="col">Gerar Relatório</th>
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
					<a href="{{ route('manager.show.report.individual', ['id'=>$user->id]) }}">
						<button class="btn btn-primary-m mx-auto btn-sm">Gerar Relatório</button>
					</a>
				</td>
			</tr>
			@endif
			@endforeach
			
		</tbody>
	</table>
</div>
<nav aria-label="..." class="mt-3">
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