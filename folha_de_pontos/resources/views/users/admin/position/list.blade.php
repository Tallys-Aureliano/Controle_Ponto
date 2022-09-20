@extends('layouts.admin')

@section('title')
Lista de cargos
@endsection

@section('content-admin')
<h1 class="text-center">Lista de cargos</h1>

<div class="table-responsive">
	<table class="table">
		<thead>
			<th>Nome</th>
			<th>Setor</th>
		</thead>

	<tbody>
		@foreach($positions as $position)
			<tr>
				<td>{{ $position->name }}</td>
				<td>{{ $position->sector->name }}</td>
			</tr>
		@endforeach
	</tbody>
</table>
</div>

@endsection