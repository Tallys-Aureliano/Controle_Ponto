@extends('layouts.admin')

@section('title')
Lista de setores
@endsection

@section('content-admin')

<h1 class="text-center">LISTA DE SETORES</h1>

<a href="{{ route('admin.sector.create') }}">
  <button class="btn btn-secundary-m mt-5">Criar Setor</button>
</a>

<div class="table-responsive mt-3">
	<table class="table">
		<thead>
			<th>Nome</th>
      <th></th>
		</thead>

	<tbody>
		@foreach($sectors as $sector)
			<tr>
				<td><a href="{{ route('admin.sector.show', ['id'=>$sector->id]) }}">
          {{ $sector->name }}
        </a>
        </td>
        <td class="d-flex justify-content-end gap-2">
          <a href="{{ route('admin.sector.edit', ['id'=>$sector->id]) }}">
            <button class="btn btn-sm btn-secundary-m">Editar</button>
          </a>
          <form action="{{ route('admin.sector.destroy', ['id'=>$sector->id]) }}" method="POST">
            @csrf
            <button class="btn btn-sm btn-danger">Apagar</button>
          </form>
        </td>
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