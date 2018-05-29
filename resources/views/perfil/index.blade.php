@extends('layouts.apphome')
@section('content')
<div class="quiniela-container">
    <div style="" class="navbar margin-topone" id="menuDesktop">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                <meta name="csrf-token" content="{{ csrf_token() }}" />

                    <form id="form-register" method="POST" action="{{url('editarperfil')}}">
                        @csrf

                        <h2>Datos Generales</h2>
                         @if(isset($datosUsuario))
                            @foreach($datosUsuario as $dataUser)
                        <ul>
							<li class="twoInputs">
								<!-- <label for="nombre">Nombre(s)</label> -->
								<input type="text" name="nombre" id="" value="{{ $dataUser->nombre}}" placeholder="Nombre(s)" required>
								<input type="text" name="apellidos" id="" value="{{ $dataUser->apellidos}}" placeholder="Apellidos" required>
							</li>
							<li>
								<!-- <label for="nombre">Apellidos</label> -->
								<input type="text" name="pais" id="" value="{{ $dataUser->pais->paisnombre}}" placeholder="País">
							</li>
							<li>
								<!-- <label for="nombre">Apellidos</label> -->
								<input type="text" name="ciudad" id="" value="{{ $dataUser->ciudad->estadonombre}}" placeholder="Estado">
							</li>
							<li class="twoInputs tooltip" >
								<!-- <label for="nombre">Correo electrónico</label> -->
								 <span class="tooltiptext"> Fecha de nacimiento</span>
								<input type="date" name="fecha_nacimiento" id="" value="{{ $dataUser->fecha_nacimiento}}" placeholder="Fecha de Nacimiento" >
								<input type="text" name="celular" id="" value="{{ $dataUser->celular}}" placeholder="Teléfono">
                                <input type="text" name="email" id="" value="{{ $dataUser->correo}}" placeholder="Teléfono">
                        	</li>
						</ul>
                        @endforeach
                    @endif
                    <button class="btn-light" id="btn-registro" type="submit">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
