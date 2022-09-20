@extends('layouts.dashboard')

@section('title')
Dados da empresa
@endsection

@section('content-dashboard')
	<h1 class="text-center">Dados da empresa</h1>
	<div class="mt-3">
	</div>
		<div class="text-center mx-auto d-flex flex-column align-items-center">
		<div class="mx-auto" >
			<ul class="list-unstyled text-left mt-5">
				<li class=""><h5>Nome: {{ $business->name }}</h5></li>
			</ul>
		</div>
		</div>
	</div>
@endsection