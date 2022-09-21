@extends('layouts.dashboard')

@section('title')
Histórico de pontos
@endsection

@section('content-dashboard')

<h1 class="text-center">Histórico de pontos</h1>

<div class="table-responsive">
	<table class="table">
		<thead>
			<td>Data</td>
			<td>Entrada</td>
			<td>Saída</td>
			<td>Situação</td>
		</thead>
		<tbody>
			@foreach($points as $point)
				<tr>
					<td>{!! date('d/m/Y', strtotime($point->date)) !!}</td>
					<td>{{$point->entry_time}}</td>
					<td>{{$point->exit_time}}</td>
					<td>@if($point->exit_time) Fechado @else Aberto @endif</td>
				</tr>
			@endforeach
		</tbody>
	</table>


</div>

@endsection