@extends('layouts.admin')

@section('title')
Lista de usuários
@endsection

@section('content-admin')
	<h1 class="text-center">LISTA DE USUÁRIOS</h1>

<div class="table-responsive mt-5">
	<table class="table">
		<thead>
			<th>Nome</th>
			<th>Matricula</th>
			<th>Email</th>
			<th>Cargo</th>
			<th>Empresa</th>
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
					<td>{{ $user->email }}</td>
					<td>{{ $user->position->name }}</td>
					<td><a href="{{ route('admin.business.show', ['id' => $user->business->id]) }}">{{ $user->business->name }}</td>
					{{-- <td>{!! date('d/m/Y', strtotime($business->created_at)) !!}</td> --}}
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