<x-layout>

<form class="regForm" method="POST" method="POST" action="{{ route('user.registration',app()->getLocale())}}">
    @csrf

<div class="form-group">
<label for="username" class="fUsername">{{ __('Your username') }}</label>
<br>
<input class="form-control" id="username" name="username" type="text" value="" placeholder="Username">
@error('username')
<div class="alert">{{ $message }}</div>
@enderror
</div>

<div class="form-group">
<label for="email" class="fEmail">{{ __('Your email') }}</label>
<br>
<input class="form-control" id="email" name="email" type="text" value="" placeholder="Email">
@error('email')
<div class="alert">{{ $message }}</div>
@enderror
</div>

<div class="form-group">
<label for="password" class="fPassword">{{ __('Password') }}</label>
<br>
<input class="form-control" id="password" name="password" type="password" value="" placeholder="Password">
@error('password')
<div class="alert"> {{$message }}</div>
@enderror
</div>

<div class="form-group">
<button class="submit" type="submit" name="sendMe" value="1">{{ __('Enter') }}</button>
</div>
</form>
</x-layout>

