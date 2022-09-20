@extends('layouts.admin')

@section('title')
Lista de setores
@endsection

@section('content-admin')

<h1 class="text-center">LISTA DE SETORES</h1>

<div class="table-responsive mt-5">
	<table class="table">
		<thead>
			<th>Nome</th>
		</thead>

	<tbody>
		@foreach($sectors as $sector)
			<tr>
				<td>{{ $sector->name }}</td>
			</tr>
		@endforeach
	</tbody>
</table>
</div>
<nav aria-label="...">
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