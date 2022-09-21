@extends('layouts.admin')

@section('title')
Lista de empresas
@endsection

@section('content-admin')

<h1 class="text-center">EMPRESAS</h1>
<div class="--form-filter mt-5 mb-3 --box-form">
	<form action="" class="get" class="--box-authentication">
			<div class="d-flex align-items-center gap-3">
				<span>Consulta por:</span>
					<select class="form-select shadow-sm" aria-label="Funcionario">
						<option selected>Tipo</option>
						<option value="1">Nome</option>
						<option value="2">Matricula</option>
					</select>
					
					<button class="btn btn-secondary shadow-md" aria-placeholder="Pesquisar">Pesquisar</button>
			</div>
		</div>
	</form>
	<hr>
</div>


<a href="{{ route('admin.business.create') }}"><button class="btn btn-primary-m">Criar Empresa</button></a>


<div class="table-responsive mt-4 rounded-3  shadow-sm mt-5">
	
	<table class="table">
		<thead>
			<th>Nome</th>
			<th>Criado em</th>
			<th></th>
		</thead>
		<tbody>
			@foreach($businesss as $business)

				@if(!$business->active)
					<tr style="background-color: #FF000020">
				@else
					<tr>
				@endif
					<td>
						<a href="{{ route('admin.business.show', ['id' => $business->id]) }}">{{ $business->name }}</a>
					</td>
					
					<td>{!! date('d/m/Y', strtotime($business->created_at)) !!}</td>
					<td class="d-flex justify-content-end gap-2">
						<a href="{{ route('admin.business.edit', ['id' => $business->id]) }}"><button class="btn btn-sm btn-secondary">Editar</button></a>
						<form action="{{ route('admin.business.destroy', ['id' => $business->id]) }}" method="POST">
							@csrf
							<button class="btn btn-sm btn-danger">Apagar</button>
						</form>
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

<div class="modal" tabindex="-1" id="modal1">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title">Modal title</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
			<p>Modal body text goes here.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
			<button type="button" class="btn btn-secundary-m">Salvar</button>
		  </div>
		</div>
	  </div>
	</div>

@endsection