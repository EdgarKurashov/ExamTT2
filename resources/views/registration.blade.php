<x-layout>
<form class="regForm" method="POST" action="{{ route('user.registration')}}">
    @csrf

<div class="form-group">
<label for="username" class="fUsername">Your username</label>
<br>
<input class="form-control" id="username" name="username" type="text" value="" placeholder="Username">
@error('username')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>

<div class="form-group">
<label for="email" class="fEmail">Your email</label>
<br>
<input class="form-control" id="email" name="email" type="text" value="" placeholder="Email">
@error('email')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>

<div class="form-group">
<label for="password" class="fPassword">Password</label>
<br>
<input class="form-control" id="password" name="password" type="password" value="" placeholder="Password">
@error('password')
<div class="alert alert-danger"> {{$message }}</div>
@enderror
</div>

<div class="form-group">
<button class="submit" type="submit" name="sendMe" value="1">Enter</button>
</div>
</form>
</x-layout>

