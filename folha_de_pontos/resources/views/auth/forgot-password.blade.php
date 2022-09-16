@extends('partials.auth._auth')
@section('title')
Login
@endsection

@section('auth-content')
<h1 class="text-center pb-4">Recuperar senha</h1>
<form method="POST" action="{{ route('password.email') }}">
    @csrf
    <div class="--form-authentication">
        <input type="email" name="email" class="form-control mt-3" placeholder="Seu email" required autofocus>
    </div>
    <div class="--other-things mt-3"></div>
    <div class="--form-authentication-button text-center mt-5">
        <button class="btn btn-primary">Enviar</button>
    </div>
</form>
<div class="--link-register mt-3">
    <p class="text-center">Ainda não tem conta? <a href="{{ route('register') }}">Cadastrar agora</a></p>
</div>
@endsection


