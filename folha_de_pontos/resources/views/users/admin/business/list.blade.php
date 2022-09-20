@extends('layouts.admin')

@section('title')
Lista de empresas
@endsection

@section('content-admin')

<div class="--form-filter mt-5 mb-3">
	<form action="" class="get" class="--form-authentication">
		<div class="d-flex flex-wrap gap-3 mt-5 --form-authentication">
			<label for="">Consulta:</label>
			<input class="form-control form-control-lg" type="text" placeholder="Nome" name="name">
			<button class="btn btn-sm btn-secundary-m shadow-md" aria-placeholder="Pesquisar">Pesquisar</button>
		</div>
	</form>
</div>


<div class="table-responsive">
	<table class="table">
		<thead>
			<th>Nome</th>
			<th>Criado em</th>
		</thead>
		<tbody>
			@foreach($businesss as $business)
				<tr>
					<td>
						<a href="{{ route('admin.business.show', ['id' => $business->id]) }}">{{ $business->name }}</a>
					</td>
					
					<td>{!! date('d/m/Y', strtotime($business->created_at)) !!}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection