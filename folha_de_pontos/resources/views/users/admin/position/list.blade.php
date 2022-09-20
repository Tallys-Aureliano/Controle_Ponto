@extends('layouts.admin')
@section('title')
Lista de cargos
@endsection
@section('content-admin')
<h1 class="text-center">LISTA DE CARGOS</h1>

<a href="{{ route('admin.position.create') }}"><button class="btn btn-secundary-m mt-5">Criar Cargo</button></a>

<div class="table-responsive mt-3">
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
						<button class="btn btn-sm btn-secundary-m">Editar</button>
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
@endsection