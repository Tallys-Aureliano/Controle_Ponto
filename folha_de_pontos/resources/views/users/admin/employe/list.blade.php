@extends('layouts.admin')

@section('title')
Lista de usuários
@endsection

@section('content-admin')
	<h1 class="text-center">LISTA DE USUÁRIOS</h1>

<div class="table-responsive">
	<table class="table">
		<thead>
			<th>Nome</th>
			<th>Matricula</th>
			<th>Email</th>
			<th>Cargo</th>
			<th>Empresa</th>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td><a href="{{ route('admin.employe.show', ['id' => $user->id]) }}">{{ $user->name }}</a></td>
					<td>{{ $user->matricula }}</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->position->name }}</td>
					<td><a href="{{ route('admin.business.show', ['id' => $user->business->id]) }}">{{ $user->business->name }}</td>
					{{-- <td>{!! date('d/m/Y', strtotime($business->created_at)) !!}</td> --}}
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection