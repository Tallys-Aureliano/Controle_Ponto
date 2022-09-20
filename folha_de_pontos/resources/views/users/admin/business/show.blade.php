@extends('layouts.admin')

@section('title')
Empresa: {{ $business->name }}
@endsection

@section('content-admin')

<h1 class="text-center">Empresa: {{ $business->name }}</h1>

<a href="{{ route('admin.business.edit', ['id' => $business->id]) }}"><button class="btn btn-sm btn-outline-success">Editar</button></a>

	<h2 class="text-center text-secondary mt-3">Funcionários</h2>
	{{-- Aqui ainda vem a lista de funcionarios dessa empresa --}}
	<div class="table-responsive">
		<table class="table">
			<thead>
				<th>Nome</th>
				<th>matricula</th>
				<th>Cargo</th>
			</thead>
			<tbody>
				@foreach($business->users as $user)
				<tr>
					<td><a href="{{ route('admin.employe.show', ['id' => $user->id]) }}">{{ $user->name }}</a></td>
					<td>
						@if($user->matricula)
							{{ $user->matricula }}
						@else
							Vazio
						@endif
					</td>
					<td>{{ $user->position->name }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@endsection