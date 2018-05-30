<input class="__input{{$errors->has('name') ? ' is-invalid' : '' }}" type="text" name ='name' >
@if($errors->has('name'))

<span class='invalid-feedback'>
{{--<strong>{{$errors->first('name')}}</strong>--}}
</span>

  @endif