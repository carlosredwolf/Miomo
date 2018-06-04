@extends('layouts.master')
@section('content')
<form method="POST" action="{{ route('password.request') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <h2>Reset password</h2>
    <ul>
        <li><input placeholder="your@email.com" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </li>
        <li><input placeholder="New password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </li>
        <li><input placeholder="Please confirm password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required></li>
        <li> <button type="submit" class="btn-light">
                {{ __('Reset Password') }}
            </button>
        </li>
    </ul>
</form>
@stop
@section('footer')
@include('layouts.footer')
@stop