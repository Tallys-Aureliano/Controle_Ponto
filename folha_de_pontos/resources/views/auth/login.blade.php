@extends('partials.auth._auth')
@section('title')
Login
@endsection

@section('auth-content')
<h1 class="text-center pb-4">Login</h1>
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="--form-authentication">
        <input type="email" name="email" class="form-control mt-3" placeholder="Entrar com Email">
        <input type="password" name="password" class="form-control mt-3" placeholder="Sua senha">
    </div>
    <div class="--other-things mt-3">
        <a href="{{ route('password.request') }}">Esqueci minha senha</a>
    </div>
    <div class="--form-authentication-button text-center mt-5">
        <button class="btn btn-primary">Entrar</button>
    </div>
</form>
<div class="--link-register mt-3">
    <p class="text-center">Ainda não tem conta? <a href="{{ route('register') }}">Cadastrar agora</a></p>
</div>
@endsection