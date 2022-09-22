@extends('layouts.admin')

@section('title')
Mostrar ponto
@endsection

@section('content-admin')
<nav aria-label="breadcrumb" class="breadcrumb-nav navbar navbar-expand-lg">
  <div class="container-fluid">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.employe.list') }}">Pontos</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ {{$point->users->name} }}</li>
    </ol>
  </div>
</nav>


<h1 class="text-center">Mostrar ponto</h1>

<div class="text-left  mx-auto d-flex flex-column align-items-center mt-5">
	<div class="d-flex justify-content-center gap-3">

		<a href="{{ route('admin.point.edit', ['id'=>$point->id]) }}">
		<button class="btn btn-secondary">Editar</button>
		</a>
		
		<form action="{{ route('admin.point.destroy', ['id'=>$point->id]) }}" method="POST">
			@csrf
			<button class="btn btn-danger"">Apagar</button>
		</form>
	</div>
	
	<ul class="list-unstyled text-left mt-5">
		<li><h5>Funcionário: <a href="{{ route('admin.employe.show', ['id'=>$point->users->id]) }}">{{$point->users->name}}</a></h5></li>
		<li class="mt-4"><h5>Data: {!! date('d/m/Y', strtotime($point->date)) !!}</h5></li>
		<li class="mt-4"><h5>Entrada: {{$point->entry_time}}</h5></li>
		<li class="mt-4"><h5>Saída: {{$point->exit_time}}</h5></li>
		<li class="mt-4"><h5>Situação: @if($point->exit_time) Fechado @else Aberto @endif</h5></li>	

	</ul>
</div>
@endsection