@extends('layout.app')

@section('title','Сброс пароля')

@section('content')
  <form class="form" method="POST" action="{{ route('password.email') }}">
    @csrf
    <label class="form__text">Почта</label>
    <input type="email" class="__input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
           value="{{ old('email') }}" required>
    @if ($errors->has('email'))
      <span class="invalid-feedback">
      </span>
    @endif
    <button type="submit" class="form__button">
      {{ __('Send Password Reset Link') }}
    </button>
  </form>
@endsection
