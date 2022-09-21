@extends('layouts.dashboard')

@section('title')
Relatório geral
@endsection

@section('content-dashboard')

	<h1 class="text-center">Relatório geral</h1>

	<div class="--form-filter mt-5 mb-3 --box-form">
	<form action="" class="get" class="--box-authentication">
		<div class="d-flex flex-column gap-3 mt-5">
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
</div>
<div class="">
	<button class="btn btn-primary-m mt-2">Gerar Relatório Geral</button>
</div>
<hr>
	<div class="table-responsive mt-5 rounded-2 shadow-sm">
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