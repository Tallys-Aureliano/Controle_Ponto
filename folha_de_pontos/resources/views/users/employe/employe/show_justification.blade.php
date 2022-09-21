@extends('layouts.dashboard')

@section('title')
Lista de justificativas
@endsection

@section('content-dashboard')

<h1 class="text-center">Minhas justificativas</h1>

<div class="table-responsive mt-5 rounded-2 shadow-sm mt-5">
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