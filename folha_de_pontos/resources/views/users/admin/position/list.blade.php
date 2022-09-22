@extends('layouts.admin')
@section('title')
Lista de cargos
@endsection
@section('content-admin')

<nav aria-label="breadcrumb" class="breadcrumb-nav navbar navbar-expand-lg">
  <div class="container-fluid">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Cargos</li>
    </ol>
  </div>
</nav>



<h1 class="text-center">LISTA DE CARGOS</h1>

<a href="{{ route('admin.position.create') }}"><button class="btn btn-primary-m mt-5">Criar Cargo</button></a>
<hr>

<div class="table-responsive mt-5 rounded-3  shadow-sm">
	<table class="table">
		<thead>
			<th>Nome</th>
			<th>Setor</th>
			<th></th>
		</thead>
		<tbody>
			@foreach($positions as $position)
			<tr>
				<td><a href="{{ route('admin.position.show', ['id' => $position->id]) }}">
					{{ $position->name }}
					</a>
				</td>
				@if($position->sector)
				<td>{{ $position->sector->name }}</td>
				@else
				<td>Vazio</td>
				@endif
				<td class="d-flex justify-content-end gap-2">
					<a href="{{ route('admin.position.edit', ['id'=>$position->id]) }}">
						<button class="btn btn-sm btn-secondary">Editar</button>
					</a>
					<form action="{{ route('admin.position.destroy', ['id' => $position->id]) }}" method="POST">
					@csrf
					<button class="btn btn-sm btn-danger">Apagar</button></form>
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