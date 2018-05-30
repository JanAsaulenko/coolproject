<input id="password" type="password" class="__input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  placeholder="password" required >
@if ($errors->has('password'))
  <span class="invalid-feedback">
    {{--переделать этот класс--}}
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
@endif