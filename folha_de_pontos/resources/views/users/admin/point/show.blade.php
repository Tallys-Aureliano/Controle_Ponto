@extends('layouts.admin')

@section('title')
Mostrar ponto
@endsection

@section('content-admin')

<h1 class="text-center">Mostrar ponto</h1>

<a href="{{ route('admin.point.edit', ['id'=>$point->id]) }}">
<button class="btn btn-sm btn-outline-warning">Editar</button>
</a>

<form action="{{ route('admin.point.destroy', ['id'=>$point->id]) }}" method="POST">
	@csrf
	<button class="btn btn-sm btn-outline-danger">Apagar</button>
</form>

<p>Funcionário: <a href="{{ route('admin.employe.show', ['id'=>$point->users->id]) }}">{{$point->users->name}}</a></p>
<p>Data: {!! date('d/m/Y', strtotime($point->date)) !!}</p>
<p>Entrada: {{$point->entry_time}}</p>
<p>Saída: {{$point->exit_time}}</p>
<p>Situação: @if($point->exit_time) Fechado @else Aberto @endif</p>

@endsection