@extends('layouts.apphome')
@section('content')
<div class="quiniela-container">
    <div style="" class="navbar margin-topone">
    <div class="row justify-content-center">
        <div>
            <div class="card">

                <div class="card-body">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <section class="quiniela-form">
                  <div class="container">
                    <div class="quiniela-form-form withoutborder">
                        <form id="form-register" method="" action="">
                            @csrf

                            <h2>User Profile</h2>
                            <a class="nav-link" href="{{url('getallusers')}}">Back</a>
                             @if(isset($datosUsuario))
                                  <ul>
                      							<li>
                      								<!-- <label for="nombre">Nombre(s)</label> -->
                      								<input type="text" name="nombre" id="" value="{{ $datosUsuario->nombre}}" placeholder="Nombre(s)" disabled>
                      							</li>
                                    <li>
                                      <input type="text" name="apellidos" id="" value="{{ $datosUsuario->apellidos}}" placeholder="Apellidos" disabled>
                                    </li>
                      							<li>
                      								<!-- <label for="nombre">Apellidos</label> -->
                      								<input type="text" name="pais" id="" value="{{ $datosUsuario->pais->paisnombre}}" placeholder="País" disabled>
                      							</li>
                      							<li>
                      								<!-- <label for="nombre">Apellidos</label> -->
                      								<input type="text" name="ciudad" id="" value="{{ $datosUsuario->ciudad->estadonombre}}" placeholder="Estado" disabled>
                      							</li>
                      							<li>
                      								<input type="date" name="fecha_nacimiento" id="" value="{{ $datosUsuario->fecha_nacimiento}}" placeholder="Fecha de Nacimiento" disabled>
                                    </li>
                                    <li>
                                      <input type="text" name="celular" id="" value="{{ $datosUsuario->celular}}" placeholder="Teléfono" disabled>
                                    </li>
                                    <li>
                                      <input type="text" name="email" id="" value="{{ $datosUsuario->correo}}" placeholder="Teléfono" disabled>
                                    </li>
          						             </ul>
                               @endif
                               {{-- <button class="btn-light" id="btn-registro" type="submit">Save</button> --}}
                        </form>
                      </div>
                    </div>
                  </div>
                </section>

            </div>
        </div>
    </div>
</div>
</div>
@endsection
