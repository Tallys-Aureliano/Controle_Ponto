@extends('layouts.admin')

@section('title')
Setor: {{ $sector->name }}
@endsection

@section('content-admin')

<h1 class="text-center">Setor: {{ $sector->name }}</h1>

<div class="d-flex align-items-center gap-2 mt-5">
	<a href="{{ route('admin.sector.edit', ['id' => $sector->id]) }}"><button class="btn btn-secundary-m ">Editar</button></a>
	<form action="{{ route('admin.sector.destroy', ['id' => $sector->id]) }}" method="POST">
		@csrf
		<button class="btn btn-danger">Remover</button>
	</form>
</div>
<hr>

	<h2 class="text-center mt-4">Cargos no setor</h2>

	<div class="table-responsive mt-3">
		<table class="table">
			<thead>
				<th>nome</th>
			</thead>
			<tbody>
				@foreach($positions as $position)
				<tr>
					<td><a href="{{ route('admin.position.show', ['id' => $position->id]) }}">{{ $position->name }}</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	<nav aria-label="..." class="mt-2">
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