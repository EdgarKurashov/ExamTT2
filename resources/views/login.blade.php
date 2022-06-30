<x-layout>
<form class="regForm" method="POST" method="POST" actlon="{{ route('user.login',app()->getLocale())}}">
    @csrf
<div class="form-group">
<label for="email" class="col-form-label-lg">{{ __('Your email') }}</label>
<br>
<input class="form-control" id="email" name="email" type="text" value="" placeholder="Email">
@error('email')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
<div class="form-group">
<label for="password" class="col-form-label-lg">{{ __('Password') }}</label>
<br>
<input class="form-control" id="password" name="password" type="password" value="" placeholder="Password">
@error('password')
<div class="alert alert-danger"> {{$message }}</div>
@enderror
</div>
<div class="form-group">
<button class="btn btn-lg btn-primary" type="submit" name="sendMe" value="1">{{ __('Enter') }}</button>
</div>
</form>
</x-layout>
