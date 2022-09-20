@extends('base')

@section('content')
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand me-auto" href="{{ route('dashboard') }}">Bem vindo, {{ auth()->user()->name }}.</a>
    <form action="{{ route('logout') }}" method="POST" class="d-flex">
    	@csrf
      <button class="btn btn-outline-danger" type="submit">Sair</button>
    </form>
  </div>
</nav>

<main class="container mt-4">
	@yield('content-admin')	
</main>

</body>
@endsection