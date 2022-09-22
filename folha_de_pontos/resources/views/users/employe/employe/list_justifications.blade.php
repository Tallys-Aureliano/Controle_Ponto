@extends('layouts.dashboard')

@section('title')
Lista de justificativas
@endsection

@section('content-dashboard')

<h1 class="text-center">Lista de justificativas</h1>

<div class="table-responsive mt-5">
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