@extends('layouts.master')

@section('content')

<form  method="POST" action="{{ route('login') }}">
	@csrf
	<h2>Sign in</h2>
	<ul>
		<li>
			<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
		</li>
		<li >
			<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Your password">

		</li>
		<li>
			<label for="remember">{{ __('Remember Me') }}
				<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}/>
			</label>
			@if ($errors->has('email'))
			<span class="invalid-feedback">
				<strong>{{ $errors->first('email') }}</strong>
			</span>
			@endif
			@if ($errors->has('password'))
			<span class="invalid-feedback">
				<strong>{{ $errors->first('password') }}</strong>
			</span>
		@endif
		</li>
		<li>
			<button type="submit" class="btn-light">
				{{ __('Login') }}
			</button>
		<br>
		<a class="navBacka" href="{{ route('password.request') }}">
			{{ __('Forgot Your Password?') }}
		</a>
	</li>
</ul>
</form>
<style>
.navBacka{
	width:99% !important;
	font:20px 'breamcatcher', helvetica, arial, sans-serif;
	margin:10px auto 5px;
	color:#CCAF88;
	text-transform:uppercase;
	letter-spacing:2px;
	word-spacing: 2px;
}
.invalid-feedback{
	width:99% !important;
	margin:10px auto 5px;
	color:#BB0000;
	text-transform:uppercase;
	letter-spacing:2px;
	word-spacing: 2px;
	font-size: 15px;
}
</style>
@stop

@section('footer')
	@include('layouts.footer')
@stop

