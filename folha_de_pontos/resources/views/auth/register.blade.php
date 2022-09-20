
@extends('partials.auth._auth')

@section('title')
Cadastro de usúario
@endsection

@section('auth-content')
<h1 class="text-center pb-4">Cadastre-se</h1>
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="--form-authentication">
        <input type="text" name="name" class="form-control mt-3" placeholder="Nome" required>
        <input type="email" name="email" class="form-control mt-3" placeholder="Email" required>
        <input type="text" name="cpf" class="form-control mt-3" placeholder="CPF" required maxlength="14">
        <input type="password" name="password" class="form-control mt-3" placeholder="Crie uma senha" required>
        <input type="password" name="password_confirmation" class="form-control mt-3" placeholder="Confirme senha" required minlength="8">
    </div>
    <div class="--other-things mt-3"></div>
    <div class="--form-authentication-button text-center mt-5">
        <button class="btn btn-lg btn-primary-m">Cadastrar</button>
    </div>
</form>
<div class="--form-authentication-button text-center">
    <button onclick="history.back()" class="btn btn-lg btn-terciary-m mt-2">Voltar</button>
</div>
<div class="--link-register mt-3">
    <p class="text-center">Já possui conta? <a href="{{ route('login') }}">Entre agora!</a></p>
</div>
@endsection