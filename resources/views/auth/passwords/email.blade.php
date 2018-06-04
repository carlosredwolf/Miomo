
@extends('layouts.master')
@section('content')     
                    @if (session('status'))
                        <div class="alert-success">
                                <strong>{{ session('status') }}</strong>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <h2>Reset Password</h2>
                        <ul>
                            <li>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="your@email.com">
                            </li>
                            <li>
                                <button type="submit" class="btn-light">
                                            {{ __('Send Password Reset Link') }}
                                </button>
                            </li>
                        </ul>    
                    </form>
                    @if ($errors->has('email'))
                    <div class="alert-error">
                        <strong>{{ $errors->first('email') }}</strong>
                    </div>
                    @endif
@stop
@section('footer')
@include('layouts.footer')
@stop


