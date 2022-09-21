@extends('layouts.dashboard')

@section('title')
Lista de justificativas
@endsection

@section('content-dashboard')
<h1 class="text-center">Lista de Justificativas</h1>

<div class="--form-filter mt-5 mb-3 --box-form">
	<form action="" class="get" class="--box-authentication">
		<div class="d-flex flex-column gap-3 mt-5">
			<div class="text-start">
				<label for="consult">Nome ou Matricula</label>
				<input class="form-control" type="text" placeholder="Nome ou Matricula" name="consult">
			</div>
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

<div class="table-responsive rounded-2 shadow-sm mt-5">
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Funcionario</th>
				<th scope="col">Data</th>
				<th scope="col">Comentário</th>
				<th scope="col">Anexo</th>
			</tr>
		</thead>
		<tbody>
			@foreach($justifications as $justification)
			<tr>
				<td><a href="{{ route('manager.show.employe', ['id'=>$justification->user->id]) }}">{{ $justification->user->name }}</a></td>
				<td>{{$justification->date}}</td>
				<td>{{ $justification->comment }}</td>
				<td>{{ $justification->attachment }}</td>
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