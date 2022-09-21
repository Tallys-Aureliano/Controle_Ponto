@extends('layouts.admin')

@section('title')
Cargo: {{ $position->name }}
@endsection

@section('content-admin')
<h1 class="text-center">Cargo: {{ $position->name }}</h1>

<h5 class="mt-5">Nome: {{ $position->name }}</h5>
<h5>Setor: 
	@if($position->sector)
		{{ $position->sector->name }}
	@else
		Vazio
	@endif
</h5>

<h2 class="text-secondary text-center mt-4">Funcionários no cargo</h2>

<div class="table-responsive mt-3">
	<table class="table">
		<thead>
			<th>Nome</th>
			<th>Matricula</th>
			<th>Email</th>
			<th>Cargo</th>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<td><a href="{{ route('admin.employe.show', ['id' => $user->id]) }}">
					{{$user->name}}
					</a>
				</td>
				<td>
					@if($user->matricula)
						{{$user->matricula}}
					@else
						Vazio
					@endif
				</td>
				<td>{{$user->email}}</td>
				<td>{{$user->position->name}}</td>
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