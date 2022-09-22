@extends('layouts.admin')

@section('title')
Lista de usuários
@endsection

@section('content-admin')
<nav aria-label="breadcrumb" class="breadcrumb-nav navbar navbar-expand-lg">
  <div class="container-fluid">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Funcionários</li>
    </ol>
  </div>
</nav>


<h1 class="text-center">Lista de funcionários</h1>

<a href="{{ route('admin.employe.create') }}"><button class="btn btn-primary-m mt-5">Criar Funcionário</button></a>
<hr>

<div class="table-responsive mt-5 rounded-3  shadow-sm"">
	<table class="table">
		<thead>
			<th>Nome</th>
			<th>Matricula</th>
			<th>Email</th>
			<th>Cargo</th>
			<th>Ativo</th>
			<th>Empresa</th>
			<th></th>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr @if($user->active == 0) style="background-color: gray;" @endif>
					<td><a href="{{ route('admin.employe.show', ['id' => $user->id]) }}">{{ $user->name }}</a></td>
					<td>
						@if($user->matricula)
							{{ $user->matricula }}
						@else
							Vazio
						@endif
					</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->position->name }}</td>
					<td>@if($user->active == 1) Sim @else Não @endif</td>
					<td><a href="{{ route('admin.business.show', ['id' => $user->business->id]) }}">{{ $user->business->name }}</td>
					<td class="d-flex justify-content-end gap-2">
						<a href="{{ route('admin.employe.edit', ['id'=>$user->id]) }}">
							<button class="btn btn-sm btn-secondary">Editar</button>
						</a>
						@if($user->active == 1)
						<form action="{{ route('admin.employe.destroy', ['id'=>$user->id]) }}" method="POST">
							@csrf
							<button class="btn btn-sm btn-danger">Apagar</button>
						</form>
						@endif
					</td>
				</tr>
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

<div class="modal" tabindex="-1" id="modal1">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title">Modal title</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
			<p>Modal body text goes here.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
			<button type="button" class="btn btn-secundary-m">Salvar</button>
		  </div>
		</div>
	  </div>
	</div>
@endsection