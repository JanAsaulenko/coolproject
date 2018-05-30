@extends('layout.app')


@section('content')
<form class="form" method="post" action="{{route('login')}}">
  @csrf
  <label id="form-text-email" class="form__text">Почта</label>
  @include('layout.header.components.forms.components.log.input-email')
  <label  id='form-text-password' class="form__text">Пароль</label>
  @include('layout.header.components.forms.components.log.input-password')
  <a class="button-link" href="{{ route('password.request') }}">
  {{ __('Forgot Your Password?') }}
  </a>
  <button class="form__button"  type="submit">  Войти  </button>
</form>
@endsection