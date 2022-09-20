@extends('layouts.admin')

@section('title')
Dashboard de administração
@endsection

@section('content-admin')
	<h1 class="text-center">DASHBOARD</h1>

	<ul class="list-group rounded-0 mb-5">
	  <li class="list-group-item active text-center" aria-current="true">Autenticação e autorização</li>
	  <li class="list-group-item d-flex flex-wrap align-items-center"><a href="{{ route('admin.business.list') }}"><p class="me-auto">Empresas</p></a> <button class="btn btn-sm btn-outline-success">Adicionar</button></li>
	  <li class="list-group-item"><a href="{{ route('admin.employe.list') }}">Funcionários</a></li>
	  <li class="list-group-item">Pontos</li>
	</ul>

	<ul class="list-group rounded-0">
	  <li class="list-group-item active text-center" aria-current="true">BlogSite</li>
	  <li class="list-group-item"><a href="{{ route('admin.sector.list') }}">Setores</a></li>
	  <li class="list-group-item"><a href="{{ route('admin.position.list') }}">Cargos</a></li>
	</ul>

@endsection