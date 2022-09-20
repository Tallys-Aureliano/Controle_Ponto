@extends('layouts.dashboard')

@section('title')
Lista de justificativas
@endsection

@section('content-dashboard')

<h1 class="text-center">Minhas justificativas</h1>

<div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Data</th>
				<th scope="col">Comentário</th>
				<th scope="col">Anexo</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				@foreach($justifications as $justification)
					<td>{{ $justification->date }}</td>
					<td>{{ $justification->comment }}</td>
					<td>
						<a href="{{ $justification->attachment }}">
							{{ $justification->attachment }}
						</a>
					</td>
				@endforeach
			</tr>
			
		</tbody>
	</table>
	
</div>

@endsection