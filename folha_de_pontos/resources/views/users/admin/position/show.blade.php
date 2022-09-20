@extends('layouts.admin')

@section('title')
Cargo: {{ $position->name }}
@endsection

@section('content-admin')
<h1 class="text-center">Cargo: {{ $position->name }}</h1>

<p>Nome: {{ $position->name }}</p>
<p>Setor: 
	@if($position->sector)
		{{ $position->sector->name }}
	@else
		Vazio
	@endif
</p>

<h2 class="text-secondary text-center">Funcionários no cargo</h2>

<div class="table-responsive">
	<table class="table">
		<thead>
			<th>Nome</th>
			<th>Matricula</th>
			<th>Email</th>
			<th>Cargo</th>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<td><a href="{{ route('admin.employe.show', ['id' => $user->id]) }}">
					{{$user->name}}
					</a>
				</td>
				<td>
					@if($user->matricula)
						{{$user->matricula}}
					@else
						Vazio
					@endif
				</td>
				<td>{{$user->email}}</td>
				<td>{{$user->position->name}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection