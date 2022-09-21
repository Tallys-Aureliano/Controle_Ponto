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
        <input type="email" name="email" class="form-control @if($errors->has('email')) is-invalid @endif mt-3" value="{{ old('email') }}" placeholder="Entre com seu Email">
        @if($errors->has('email'))
        <div class="invalid-feedback">
            @error('email') {{ $message }} @enderror
        </div>
        @endif

        <input type="password" name="password" class="form-control @if($errors->has('password')) is-invalid @endif mt-3" placeholder="Sua senha">
        @if($errors->has('password'))
        <div class="invalid-feedback">
            @error('password') {{ $message }} @enderror
        </div>
        @endif
    </div>

    <div class="--other-things mt-3">
        <a href="{{ route('password.request') }}">Esqueci minha senha</a>
    </div>
    <div class="--form-authentication-button text-center mt-4">
        <button class="btn btn-lg btn-primary-m">Entrar</button>
    </div>
</form>
<div class="--form-authentication-button text-center">
    <button onclick="history.back()" class="btn btn-lg btn-terciary-m mt-2">Voltar</button>
</div>
<div class="--link-register mt-4">
    <p class="text-center">Ainda não possui conta? <a href="{{ route('register') }}">Cadastre-se agora!</a></p>
</div>
@endsection