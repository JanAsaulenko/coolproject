@extends('layout.app')


@section('content')
<form class="form" method="post" action="{{route('register')}}">
  @csrf
  <label  id='reg-form-name' class="form-text">Имя</label>
  @include ('layout.header.components.forms.components.reg.input-name')
  <label  id="reg-form-email" class="form-text">Почта</label>
  @include ('layout.header.components.forms.components.reg.input-email')
  <label  id='reg-form-password' class="form-text">Пароль</label>
  @include ('layout.header.components.forms.components.reg.input-password')
  <label  id='reg-form-confirm' class="form-text">Подтвертить пароль</label>
  @include ('layout.header.components.forms.components.reg.confirm-password')
  <button class="form__button" type="submit">
    Зарегестрироваться
  </button>
</form>
@endsection