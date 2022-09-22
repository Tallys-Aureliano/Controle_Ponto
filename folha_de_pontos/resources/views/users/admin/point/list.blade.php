@extends('layouts.admin')

@section('title')
Lista de pontos
@endsection

@section('content-admin')
<nav aria-label="breadcrumb" class="breadcrumb-nav navbar navbar-expand-lg">
  <div class="container-fluid">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Pontos</li>
    </ol>
  </div>
</nav>


<h1 class="text-center">Lista de pontos</h1>

<a href="{{ route('admin.point.create') }}">
	<button class="btn btn-primary-m mt-5">Criar Ponto</button>
</a>
<hr>

<div class="mt-5">
	<div class="table-responsive mt-3 rounded-3  shadow-sm">

		<table class="table">
			<thead>
				<th>Funcionário</th>
				<th>Data</th>
				<th>Entrada</th>
				<th>Saída</th>
				<th>Situação</th>
				<th></th>
			</thead>
			<tbody>
				@foreach($points as $point)
				<tr @if(!$point->exit_time) style="background-color: grey;" @endif>
					<td>
						<a href="{{ route('admin.point.show', ['id'=>$point->id]) }}">
							{{$point->users->name}}
						</a>
					</td>
					<td>{!! date('d/m/Y', strtotime($point->date)) !!}</td>
					<td>{{$point->entry_time}}</td>
					<td>{{$point->exit_time}}</td>
					<td>@if($point->exit_time) Fechado @else Aberto @endif</td>
					<td class="d-flex justify-content-end gap-2"">
						<a href="{{ route('admin.point.edit', ['id'=>$point->id]) }}"><button class="btn btn-sm btn-secondary">Editar</button></a>
						<form action="{{ route('admin.point.destroy', ['id'=>$point->id]) }}" method="POST">
							@csrf
							<button class="btn btn-sm btn-danger">Apagar</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>


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