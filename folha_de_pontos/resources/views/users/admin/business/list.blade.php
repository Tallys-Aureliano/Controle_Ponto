@extends('layouts.admin')

@section('title')
Lista de empresas
@endsection

@section('content-admin')

<h1 class="text-center">EMPRESAS</h1>
<div class="--form-filter mt-5 mb-3">
	<form action="" class="get" class="--form-authentication">
		<div class="d-flex flex-wrap gap-3 mt-5 --form-authentication">
			<label for="">Consulta:</label>
			<input class="form-control form-control-lg" type="text" placeholder="Nome" name="name">
			<button class="btn btn-sm btn-secundary-m shadow-md" aria-placeholder="Pesquisar">Pesquisar</button>
		</div>
	</form>
</div>

<a href="{{ route('admin.business.create') }}"><button class="btn btn-sm btn-outline-success">Nova</button></a>


<div class="table-responsive mt-4">
	<table class="table">
		<thead>
			<th>Nome</th>
			<th>Criado em</th>
			<th></th>
		</thead>
		<tbody>
			@foreach($businesss as $business)

				@if(!$business->active)
					<tr style="background-color: gray">
				@else
					<tr>
				@endif
					<td>
						<a href="{{ route('admin.business.show', ['id' => $business->id]) }}">{{ $business->name }}</a>
					</td>
					
					<td>{!! date('d/m/Y', strtotime($business->created_at)) !!}</td>
					<td>
						<a href="{{ route('admin.business.edit', ['id' => $business->id]) }}"><button class="btn btn-sm btn-outline-success">Editar</button></a>
						<form action="{{ route('admin.business.destroy', ['id' => $business->id]) }}" method="POST">
							@csrf
							<button class="btn btn-sm btn-outline-danger">Apagar</button>
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