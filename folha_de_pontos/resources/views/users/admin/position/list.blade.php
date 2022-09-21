@extends('layouts.admin')
@section('title')
Lista de cargos
@endsection
@section('content-admin')
<h1 class="text-center">LISTA DE CARGOS</h1>

<a href="{{ route('admin.position.create') }}"><button class="btn btn-secundary-m mt-5">Criar Cargo</button></a>

<div class="table-responsive mt-3 rounded-3  shadow-sm">
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
@endsection