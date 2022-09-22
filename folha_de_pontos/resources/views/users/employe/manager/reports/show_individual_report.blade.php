@extends('layouts.dashboard')

@section('title')
Relatório individual
@endsection

@section('content-dashboard')
	<h1 class="text-center">Relatório de: {{$points[0]->users->name}}</h1>
	
	<h3 class="text-secondary mt-5">Total de pontos batidos: {{$points->count()}}</h3>
	<div class="table-responsive table-sm shadow-sm rounded-2 mt-5">
		<table class="table">
			<thead>
				<th>Data</th>
				<th>Entrada</th>
				<th>Saida</th>
				<th>Situação</th>
			</thead>
			<tbody>
				@foreach($points as $point)
				<tr @if(!$point->exit_time) style="background-color: #FFC70040;" @endif>
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

	<nav aria-label="..." class="mt-3">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled rounded">
      <a class="page-link">Anterior</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Próxima</a>
    </li>
  </ul>
</nav>

@endsection