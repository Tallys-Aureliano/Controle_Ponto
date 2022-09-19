
@extends('partials.auth._auth')


@section('title')
Login
@endsection



@section('auth-content')
<div class="text-center">
    <img src="{{ asset('assets/img/logo-grande.png') }}" alt="">
</div>
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="--form-authentication">
        <input type="email" name="email" class="form-control mt-3" placeholder="Entrar com Email">
        <input type="password" name="password" class="form-control mt-3" placeholder="Sua senha">
    </div>
    <div class="--other-things mt-3">
        <a href="{{ route('password.request') }}">Esqueci minha senha</a>
    </div>
    <div class="--form-authentication-button text-center mt-4">
        <button class="btn btn-lg btn-primary-m">Entrar</button>
        <button onclick="history.back()" class="btn btn-lg btn-terciary-m mt-2">Voltar</button>
    </div>
</form>
<div class="--link-register mt-4">
    <p class="text-center">Ainda não tem conta? <a href="{{ route('register') }}">Cadastrar agora</a></p>
</div>
@endsection