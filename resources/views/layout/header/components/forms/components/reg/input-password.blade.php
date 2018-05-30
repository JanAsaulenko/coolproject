<input name="password" type="password" class='__input{{$errors->has('password') ? ' is-invalid' : ""}}' required>

@if($errors->has('password'))

<span class="invalid-feedback">
  {{--<strong>{{$errors->first('password')}}</strong>--}}
</span>
  @endif