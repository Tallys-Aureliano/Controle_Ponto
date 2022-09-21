@extends('base')

@section('head')
<!-- CSS ADMIN -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/admin.css') }}">
@endsection

@section('content')
<body>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand me-auto text-white fs-4" href="{{ route('dashboard') }}">Bem vindo, {{ auth()->user()->name }}.</a>
    <form action="{{ route('logout') }}" method="POST" class="d-flex">
    	@csrf
      <button class="btn btn-sair" type="submit">Sair</button>
    </form>
  </div>
</nav>

<nav aria-label="breadcrumb" class="breadcrumb-nav navbar navbar-expand-lg">
  <div class="container-fluid">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Library</li>
    </ol>
  </div>
</nav>

<main class="container mt-4 mb-5">
	@include('partials.flash_messages')
	@yield('content-admin')	
</main>

</body>
@endsection