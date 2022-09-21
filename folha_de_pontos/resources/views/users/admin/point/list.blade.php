@extends('layouts.admin')

@section('title')
Lista de pontos
@endsection

@section('content-admin')
<h1 class="text-center">Lista de pontos</h1>

<a href="{{ route('admin.point.create') }}">
	<button class="btn btn-sm btn-outline-success">Novo</button>
</a>

<table class="table">
	<thead>
		<th>Funcionário</th>
		<th>Data</th>
		<th>Entrada</th>
		<th>Saída</th>
		<th>Situação</th>
		<th></th>
	</thead>
	<tbody>
		@foreach($points as $point)
		<tr @if(!$point->exit_time) style="background-color: grey;" @endif>
			<td>
				<a href="{{ route('admin.point.show', ['id'=>$point->id]) }}">
					{{$point->users->name}}
				</a>
			</td>
			<td>{!! date('d/m/Y', strtotime($point->date)) !!}</td>
			<td>{{$point->entry_time}}</td>
			<td>{{$point->exit_time}}</td>
			<td>@if($point->exit_time) Fechado @else Aberto @endif</td>
			<td>
				<a href="{{ route('admin.point.edit', ['id'=>$point->id]) }}"><button class="btn btn-sm btn-outline-warning">Editar</button></a>
				<form action="{{ route('admin.point.destroy', ['id'=>$point->id]) }}" method="POST">
					@csrf
					<button class="btn btn-sm btn-outline-danger">Apagar</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection