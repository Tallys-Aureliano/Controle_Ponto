@extends('layouts.dashboard')

@section('title')
Relatório individual
@endsection

@section('content-dashboard')
	<h1 class="text-center">Relatório de: {{$points[0]->users->name}}</h1>
	
	<h3 class="text-secondary">Total de pontos batidos: {{$points->count()}}</h3>
	<div class="table-responsive table-sm">
		<table class="table">
			<thead>
				<th>Data</th>
				<th>Entrada</th>
				<th>Saida</th>
				<th>Situação</th>
			</thead>
			<tbody>
				@foreach($points as $point)
				<tr @if(!$point->exit_time) style="background-color: gray;" @endif>
					<td>{{ $point->date }}</td>
					<td>{{ $point->entry_time }}</td>
					<td>{{ $point->exit_time }}</td>
					<td>
						@if($point->exit_time)
							Fechado
						@else
							Aberto
						@endif
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@endsection