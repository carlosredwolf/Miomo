@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                <meta name="csrf-token" content="{{ csrf_token() }}" />
                 
                    <form id="form-register" method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <h2>Datos Generales</h2>
						<ul>
							<li class="twoInputs">
								<!-- <label for="nombre">Nombre(s)</label> -->
								<input type="text" name="nombre" id="" value="" placeholder="Nombre(s)" required>
								<input type="text" name="apellidos" id="" value="" placeholder="Apellidos" required>
							</li>
							<li>
								<!-- <label for="nombre">Apellidos</label> -->
								<input type="text" name="pais" id="" value="" placeholder="País">
							</li>
							<li>
								<!-- <label for="nombre">Apellidos</label> -->
								<input type="text" name="ciudad" id="" value="" placeholder="Estado">
							</li>

							<li class="twoInputs tooltip" >
								<!-- <label for="nombre">Correo electrónico</label> -->
								 <span class="tooltiptext"> Fecha de nacimiento</span>
								<input type="date" name="fecha_nacimiento" id="" value="" placeholder="Fecha de Nacimiento" >
								<input type="text" name="celular" id="" value="" placeholder="Teléfono">
							</li>

						</ul>
						<h2>Tipo de usuario</h2>
						<ul class="tipoUsuario">
							<li>
								<label for="tuser1" class="checkbox">
        						<input type="checkbox" class="checkbox" id="tuser1" name="check_tuser[]" value="apostador" />Usuario</label>
							</li>
							<li>
								<label for="tuser2" class="checkbox">
        						<input type="checkbox" class="checkbox" id="tuser2" name="check_tuser[]" value="book" />Book</label>
							</li>
							<li>
								<label for="tuser3" class="checkbox">
        						<input type="checkbox" class="checkbox" id="tuser3" name="check_tuser[]" value="visitante"  />Solo me interesa la quiniela</label>
							</li>

							<!-- <li class="selectOps styled-select slate">
								<select name="tipo_usuario">
									<option value="opcion1">Apostador</option>
									<option value="opcion2">Visitante</option>
									<option value="opcion3">Solo me interesa la quiniela</option>
								</select>
							</li> -->
						</ul>
						<h2>Datos de Usuario</h2>
						<ul>
							<li><input type="text" name="name" id="" value="" placeholder="Nombre de Usuario"></li>
							 @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
							<li>
								<!-- <label for="nombre">Dirección</label> -->
								<input type="email" name="email" id="" placeholder="Correo Electrónico" required>
							@if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							</li>
							<li><input type="password" name="password" id="" placeholder="Contraseña" required>
							@if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
							</li>
							<li><input type="password" name="password_confirmation" id="" placeholder="Repetir contraseña" required></li>
							{!! Recaptcha::render() !!}
							@if ($errors->has('g-recaptcha-response'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
							<li>
								 <button class="btn-light" id="btn-registro" type="submit">Enviar</button>
						
							</li>
						</ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/intereses.js') }}" defer></script>
@endsection
