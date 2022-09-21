@extends('layouts.admin')

@section('title')
Lista de usuários
@endsection

@section('content-admin')
<h1 class="text-center">LISTA DE USUÁRIOS</h1>

<a href="{{ route('admin.employe.create') }}"><button class="btn btn-secundary-m mt-5">Criar Usuário</button></a>

<div class="table-responsive mt-3 rounded-3  shadow-sm"">
	<table class="table">
		<thead>
			<th>Nome</th>
			<th>Matricula</th>
			<th>Email</th>
			<th>Cargo</th>
			<th>Ativo</th>
			<th>Empresa</th>
			<th></th>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr @if($user->active == 0) style="background-color: gray;" @endif>
					<td><a href="{{ route('admin.employe.show', ['id' => $user->id]) }}">{{ $user->name }}</a></td>
					<td>
						@if($user->matricula)
							{{ $user->matricula }}
						@else
							Vazio
						@endif
					</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->position->name }}</td>
					<td><a href="{{ route('admin.business.show', ['id' => $user->business->id]) }}">{{ $user->business->name }}</td>
					<td>@if($user->active == 1) Sim @else Não @endif</td>
					<td class="d-flex justify-content-end gap-2">
						<a href="{{ route('admin.employe.edit', ['id'=>$user->id]) }}">
							<button class="btn btn-sm btn-secondary">Editar</button>
						</a>
						@if($user->active == 1)
						<form action="{{ route('admin.employe.destroy', ['id'=>$user->id]) }}" method="POST">
							@csrf
							<button class="btn btn-sm btn-danger">Apagar</button>
						</form>
						@endif
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
@endsection