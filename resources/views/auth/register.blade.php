@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/strength.css') }}">
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
							<li class="twoInputs">
								<!-- <label for="nombre">Nombre(s)</label> -->
								<input type="text" name="nombre" id="" value="" placeholder="Name(s)" required>
								<input type="text" name="apellidos" id="" value="" placeholder="Last name" required>
							</li>
							<li>
								<!-- <label for="nombre">Apellidos</label> -->
								<input type="text" name="pais" id="pais-input" value="" placeholder="Country" style="visibility:hidden">
								<li class="selectOps styled-select slate">
									<select name="paises" id="select-pais">
									</select>
								</li>
							</li>
							<li>
								<!-- <label for="nombre">Apellidos</label> -->
								<li class="selectOps styled-select slate">
									<select name="ciudades" id="select-estado">
									<option value="x">First select your country</option>
									</select>
								</li>
								<input type="text" name="ciudad" id="estado-input" value="" placeholder="Estado" style="visibility:hidden">
							</li>

							<li class="twoInputs tooltip" >
								<!-- <label for="nombre">Correo electrónico</label> -->
								 <span class="tooltiptext"> Birthdate</span>
								<input type="date" name="fecha_nacimiento" id="" value="" placeholder="Birthdate" >
								<input type="text" name="celular" id="" value="" placeholder="Phone">
							</li>

						</ul>
						<h2>User type</h2>
						<ul class="tipoUsuario">
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
        						<input type="checkbox" class="checkbox" id="tuser3" name="check_tuser[]" value="visitante"  />I'm only interested in the quiniela</label>
							</li>

							<!-- <li class="selectOps styled-select slate">
								<select name="tipo_usuario">
									<option value="opcion1">Apostador</option>
									<option value="opcion2">Visitante</option>
									<option value="opcion3">Solo me interesa la quiniela</option>
								</select>
							</li> -->
						</ul>
						<h2>User data</h2>
						<ul>
							<li><input type="text" name="name" id="" value="" placeholder="Username"></li>
							 @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
							<li>
								<!-- <label for="nombre">Dirección</label> -->
								<input type="email" name="email" id="" placeholder="Email" required>
							@if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							</li>
							<li><input type="password" name="password" id="myPassword" placeholder="Password" required>
							@if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
							</li>
							<br>
							<br>
							<br>
							<li><input type="password" name="password_confirmation" id="" placeholder="Confirm password" required></li>
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
<script src="{{ asset('js/intereses.js') }}" defer></script>
<script src="{{ asset('js/strength.js') }}"></script>
<script src="{{ asset('js/js.js') }}"></script>
<script>
        $(document).ready(function($) {
            $('#myPassword').strength({
                strengthClass: 'strength',
                strengthMeterClass: 'strength_meter',
                strengthButtonClass: 'button_strength',
                strengthButtonText: 'Show Password',
                strengthButtonTextToggle: 'Hide Password'
            });

        });
    </script>
@endsection
