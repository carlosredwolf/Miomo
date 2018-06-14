@extends('layouts.master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                <meta name="csrf-token" content="{{ csrf_token() }}" />

                    <form id="form-register" method="POST" action="{{ route('register') }}">
                        @csrf

                        <h2>General data</h2>
						<ul>
							<li>
								<!-- <label for="nombre">Nombre(s)</label> -->
								<input type="text" name="nombre" id="" value="{{ old('nombre') }}" placeholder="Name(s)" required autofocus>

							</li>
							<li>
								<input type="text" name="apellidos" id="" value="{{ old('apellidos') }}" placeholder="Last name" required autofocus>
								@if ($errors->has('apellidos'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('apellidos') }}</strong>
                                    </span>
                                @endif
							</li>
							<li>
								<!-- <label for="nombre">Apellidos</label> -->
								<input type="text" name="pais" id="pais-input" value="" placeholder="Country" style="visibility:hidden">
								@if ($errors->has('pais'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('pais') }}</strong>
                                    </span>
                                @endif
								<li class="selectOps styled-select slate">
									<select name="paises" id="select-pais">
									</select>
                  {{-- <select id="country" name="country"></select> --}}
								</li>
							</li>
							<li>
								<!-- <label for="nombre">Apellidos</label> -->
								<li class="selectOps styled-select slate">
									<select name="ciudades" id="select-estado">
									<option value="x">First select your country</option>
									</select>
                  {{-- <select name="state" id="state"></select> --}}
								</li>
								@if ($errors->has('ciudad'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('ciudad') }}</strong>
                                    </span>
                                @endif
								<input type="text" name="ciudad" id="estado-input" value="" placeholder="Estado" style="visibility:hidden">
							</li>

							<li class="twoInputs tooltip" >
								<!-- <label for="nombre">Correo electrónico</label> -->
								 <span class="tooltiptext"> Birthdate</span>
								<input type="date" name="fecha_nacimiento" id="datepicker" value="{{ old('fecha_nacimiento') }}" placeholder="Birthdate" required autofocus>
								 @if ($errors->has('fecha_nacimiento'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('fecha_nacimiento') }}</strong>
                                    </span>
                                @endif
								<input type="text" name="celular" id="" value="{{ old('celular') }}" placeholder="Phone" required autofocus>
								@if ($errors->has('celular'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('celular') }}</strong>
                                    </span>
                                @endif
							</li>

						</ul>
						<h2>User type</h2>
						<ul class="tipoUsuario">
							<input id="apostador" name="apostador" type="text" value="null" style="visibility:hidden">
							<input id="book" name="book" type="text" value="null" style="visibility:hidden">
							<input id="visitante" name="visitante" type="text" value="null" style="visibility:hidden">
							<li>
								<label for="tuser1" class="checkbox">
        						<input type="checkbox" class="checkbox" id="tuser1" name="check_tuser[]" value="apostador" />User</label>
							</li>
							<li>
								<label for="tuser2" class="checkbox">
        						<input type="checkbox" class="checkbox" id="tuser2" name="check_tuser[]" value="book" />Bookmaker</label>
							</li>
							<li>
								<label for="tuser3" class="checkbox">
        						<input type="checkbox" class="checkbox" id="tuser3" name="check_tuser[]" value="visitante"  />I'm only interested in the pool</label>
							</li>
						</ul>
						<h2>User data</h2>
						<ul>
							<li class="li-register"><input type="text" name="name" id="" value="{{ old('name') }}" placeholder="Username" required autofocus></li>
							 @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
							<li class="li-register">
								<input type="email" name="email" id="" value="{{ old('email') }}" placeholder="Email" required autofocus>
							@if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							</li>
							<li  class="li-register"><input type="email" name="email_confirmation" id="" placeholder="Confirm email" required></li>
							<li  class="li-register"><input type="password" name="password" id="myPassword" placeholder="Password" required>
							@if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
							</li>
							<br>
							<br>
							<br>
							<li  class="li-register"><input type="password" name="password_confirmation" id="" placeholder="Confirm password" required></li>
							{!! Recaptcha::render() !!}
							@if ($errors->has('g-recaptcha-response'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
							<li>
								 <button class="btn-light" id="btn-registro" type="submit">Register</button>

							</li>
						</ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
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
.li-register{
  margin: 0 0 38px 0 !important;
  font-size: 8px !important;
}

</style>
<script src="{{ asset('js/intereses.js') }}" defer></script>
<script src="{{ asset('js/paises.js') }}" defer></script>
<script src="{{ asset('js/strength.js') }}"></script>
<script src="{{ asset('js/js.js') }}"></script>
{{-- <script src="{{ asset('js/countries.js') }}"></script> --}}
<script>
        /*$(document).ready(function($) {
			$( "#datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true
          });*/
            $('#myPassword').strength({
                strengthClass: 'strength',
                strengthMeterClass: 'strength_meter',
                strengthButtonClass: 'navBacka',
                strengthButtonText: 'Show Password',
                strengthButtonTextToggle: 'Hide Password'
            });

        });
    </script>

{{-- <script language="javascript">
	populateCountries("select-pais", "select-estado"); // first parameter is id of country drop-down and second parameter is id of state drop-down
</script> --}}
@endsection

@section('footer')

	@include('layouts.footer')

@stop
