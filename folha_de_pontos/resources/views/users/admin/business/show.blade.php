@extends('layouts.admin')

@section('title')
Empresa: {{ $business->name }}
@endsection

@section('content-admin')

<h1 class="text-center">Empresa: {{ $business->name }}</h1>
	<h2 class="text-center mt-5">Funcionários</h2>

	<a href="{{ route('admin.business.edit', ['id' => $business->id]) }}" class="mt-4"><button class="btn btn-secundary-m mt-4">Editar</button></a>
	{{-- Aqui ainda vem a lista de funcionarios dessa empresa --}}
	<div class="table-responsive mt-3 rounded-3  shadow-sm">
		<table class="table">
			<thead>git 
				<th>Nome</th>
				<th>matricula</th>
				<th>Cargo</th>
			</thead>
			<tbody>
				@foreach($users as $user)
				<tr>
					<td><a href="{{ route('admin.employe.show', ['id' => $user->id]) }}">{{ $user->name }}</a></td>
					<td>
						@if($user->matricula)
							{{ $user->matricula }}
						@else
							Vazio
						@endif
					</td>
					<td>{{ $user->position->name }}</td>
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