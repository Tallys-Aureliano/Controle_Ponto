
@extends('base')
@section('head')
  <!-- CSS INDEX -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/auth.css')}}">
@endsection
@section('content')

<main>
<div class="--box-authentication shadow-lg mx-auto rounded-2">
    @yield('auth-content')
            
</div>
</main>

@endsection