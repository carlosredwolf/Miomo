
@extends('layouts.appUserQuin')

@section('content')
    
    <h1>Scores by Round</h1>
    <section class="quiniela">
            <div class="container">
        
              {{-- @include('sections.containerResultados') --}}
              <div class="quiniela-container">
        
                <div class="contenido"> 
    @if ($userData)
           <h1>{{$userData->nombre}}</h1>
           <h1>{{$userData->apellidos}}</h1>
        
    @endif
    
                </div>
              </div>
            </div>
    </section>

@endsection

@section('footer')
<a class="navBacka" href="../../misquinielas">Back</a>
@endsection
