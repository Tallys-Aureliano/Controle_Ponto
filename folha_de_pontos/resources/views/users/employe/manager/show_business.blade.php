@extends('layouts.dashboard')

@section('title')
Dados da empresa
@endsection

@section('content-dashboard')

	<h1 class="text-center">Dados da empresa</h1>

	<p>Nome: {{ $business->name }}</p>
	<p>Cnpj: {{ $business->cnpj }}</p>

@endsection