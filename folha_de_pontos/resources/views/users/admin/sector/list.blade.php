@extends('layouts.admin')

@section('title')
Lista de setores
@endsection

@section('content-admin')

<h1 class="text-center">Lista de setores</h1>

<div class="table-responsive">
	<table class="table">
		<thead>
			<th>Nome</th>
		</thead>

	<tbody>
		@foreach($sectors as $sector)
			<tr>
				<td>{{ $sector->name }}</td>
			</tr>
		@endforeach
	</tbody>
</table>
</div>

@endsection