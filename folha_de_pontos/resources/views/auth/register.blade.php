@extends('partials.auth._auth')

@section('title')
Cadastro de usúario
@endsection

@section('auth-content')
<h1 class="text-center pb-4">Cadastro</h1>
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="--form-authentication">
        <input type="text" name="name" class="form-control mt-3" placeholder="Digite seu nome">
        <input type="email" name="email" class="form-control mt-3" placeholder="Digite seu email">
        <input type="password" name="password" class="form-control mt-3" placeholder="Digite uma senha">
        <input type="password" name="password_confirmation" class="form-control mt-3" placeholder="Confirme sua senha">
    </div>
    <div class="--other-things mt-3"></div>
    <div class="--form-authentication-button text-center mt-5">
        <button class="btn btn-primary">Cadastrar</button>
    </div>
</form>
<div class="--link-register mt-3">
    <p class="text-center">Já possui uma conta? <a href="{{ route('login') }}">Entre agora</a></p>
</div>
@endsection