@extends('layout.app')
@section('title','Сброс пароля')
@section('content')
  <form method="POST" class="form" action="{{ route('password.request') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <label id="reset-form__text-email" class="form-text-email">Почта</label>
    <input type="email" class="__input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
           value="{{ $email ?? old('email') }}" required autofocus>
    @if ($errors->has('email'))
      <span class="invalid-feedback">

           </span>
    @endif
    <label id="reset-form__text-password" class="form-text-email">Пароль</label>
    <input type="password" class="__input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

    @if ($errors->has('password'))
      <span class="invalid-feedback">

           </span>
    @endif
    <label id="reset-form__text-confirm" class="form-text-email">Подтвердить пароль</label>
    <input id="reset-form__input-confirm" type="password" class="__input" name="password_confirmation" required>
    <button type="submit" class="form__button">
      Сброс пароля
    </button>
  </form>

@endsection
