@extends('layouts.dashboard')

@section('title')
Lista de justificativas
@endsection

@section('content-dashboard')

<h1 class="text-center">Lista de justificativas</h1>

<div class="table-responsive">
	<table class="table">
		<thead>
			<td>Data</td>
			<td>Comentário</td>
			<td>Anexo</td>
		</thead>
		<tbody>
			@foreach($justifications as $justification)
				<tr>
					<td>{!! date('d/m/Y', strtotime($justification->date)) !!}</td>
					<td>{{$justification->comment}}</td>
					<td>{{$justification->attachment}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>


</div>

@endsection