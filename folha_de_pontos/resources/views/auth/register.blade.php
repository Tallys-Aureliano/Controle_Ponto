
@extends('partials.auth._auth')

@section('title')
Cadastro de usúario
@endsection

@section('auth-content')
<h1 class="text-center pb-1">Cadastro do Gestor</h1>
<h5 class="text-center mt5" style="color: #6c757d;">Em seguida cadastre sua empresa</h5>
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="--form-authentication">
        <input type="text" name="name" class="form-control @if($errors->has('name')) is-invalid @endif mt-3" placeholder="Nome" value="{{ old('name') }}" required>
        @if($errors->has('name'))
        <div class="invalid-feedback">
            @error('name') {{ $message }} @enderror
        </div>
        @endif

        <input type="email" name="email" class="form-control @if($errors->has('email')) is-invalid @endif mt-3" placeholder="Email" value="{{ old('email') }}" required>
        @if($errors->has('email'))
        <div class="invalid-feedback">
            @error('email') {{ $message }} @enderror
        </div>
        @endif

        <input type="text" name="cpf" class="form-control @if($errors->has('cpf')) is-invalid @endif mt-3" placeholder="CPF" value="{{ old('cpf') }}" required maxlength="14">
        @if($errors->has('cpf'))
        <div class="invalid-feedback">
            @error('cpf') {{ $message }} @enderror
        </div>
        @endif

        <input type="password" name="password" class="form-control @if($errors->has('password')) is-invalid @endif mt-3" placeholder="Crie uma senha" required>
        @if($errors->has('password'))
        <div class="invalid-feedback">
            @error('password') {{ $message }} @enderror
        </div>
        @endif

        <input type="password" name="password_confirmation" class="form-control @if($errors->has('password_confirmation')) is-invalid @endif mt-3" placeholder="Confirme senha" required minlength="8">
        @if($errors->has('password_confirmation'))
        <div class="invalid-feedback">
            @error('password_confirmation') {{ $message }} @enderror
        </div>
        @endif

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