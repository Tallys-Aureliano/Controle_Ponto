@extends('layouts.dashboard')

@section('title')
Histórico de pontos
@endsection

@section('content-dashboard')

<h1 class="text-center">Histórico de pontos</h1>

<div class="table-responsive mt-5">
	<table class="table">
		<thead>
			<td>Data</td>
			<td>Entrada</td>
			<td>Saída</td>
			<td>Situação</td>
		</thead>
		<tbody>
			@foreach($points as $point)
				<tr @if(!$point->exit_time) style="background-color: gray;" @endif>
					<td>{!! date('d/m/Y', strtotime($point->date)) !!}</td>
					<td>{{$point->entry_time}}</td>
					<td>{{$point->exit_time}}</td>
					<td>@if($point->exit_time) Fechado @else Aberto @endif</td>
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