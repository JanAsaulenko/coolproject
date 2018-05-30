<input  type="email" class="__input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
@if ($errors->has('email'))
<span class="invalid-feedback">
{{--<strong>{{ $errors->first('email') }}</strong>--}}
</span>
@endif