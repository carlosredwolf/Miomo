
@extends('layouts.appAdmin')

@section('content')
    
    <h1>Scores by Round</h1>
    <section class="quiniela">
            <div class="container">
        
              {{-- @include('sections.containerResultados') --}}
              <div class="quiniela-container">
        
                <div class="contenido"> 
    @if ($quiniela)
        
        @foreach ($quiniela as $qui)
            <table>
                <thead>
                    <th> Pool number </th>
                    <th> Score </th>
                    <th> Round </th>
                    <th> Options </th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                        {{$qui->id}}
                        </td>
                        <td>
                        {{$qui->puntaje}}
                        </td>
                        <td>
                                {{$qui->id_jornada}}
                        </td>
                        <td>
                            <a class="navBacka" href="/perfil/{{$qui->id}}/">See perfil</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        @endforeach
        
    @endif
    
                </div>
              </div>
            </div>
    </section>

@endsection