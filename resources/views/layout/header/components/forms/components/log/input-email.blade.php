<input id="email" type="email" class="__input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  placeholder="email address" required autofocus>

@if ($errors->has('email'))
  <span class="invalid-feedback">
    {{--<strong>{{ $errors->first('email') }}</strong>--}}
  </span>
@endif