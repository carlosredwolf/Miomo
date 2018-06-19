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
                        <form id="form-register" method="POST" action="{{url('editarperfil')}}">
                            @csrf

                            <h2>User Profile</h2>
                             @if(isset($dataUser))
                                  <ul>
                      							<li>
                      								<!-- <label for="nombre">Nombre(s)</label> -->
                      								<input type="text" name="nombre" id="" value="{{ $dataUser->nombre}}" placeholder="Nombre(s)" required>
                      							</li>
                                    <li>
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
                      							<li>
                      								<input type="date" name="fecha_nacimiento" id="" value="{{ $dataUser->fecha_nacimiento}}" placeholder="Fecha de Nacimiento" >
                                    </li>
                                    <li>
                                      <input type="text" name="celular" id="" value="{{ $dataUser->celular}}" placeholder="Teléfono">
                                    </li>
                                    <li>
                                      <input type="text" name="email" id="" value="{{ $dataUser->correo}}" placeholder="Teléfono">
                                    </li>
          						             </ul>
                               @endif
                               <button class="btn-light" id="btn-registro" type="submit">Save</button>
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
