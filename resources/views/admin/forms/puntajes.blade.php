
@extends('layouts.appAdmin')

@section('content')
<link rel="stylesheet" href="/css/table.css">
    <h1>Scores by Round</h1>
    <section class="quiniela">
            <div class="container">

              <div class="quiniela-container">

                <div class="contenido">
                    <div class="titulo-quiniela altura">
                        <a class="nav-link" href="{{url()->previous() }}">Back</a>
                    </div>

    @if ($quiniela)

        @foreach ($quiniela as $qui)
        <div class="datagrid">
            <table>
                <thead>
                    <th> User </th>
                    <th> Score Round </th>
                    <th> Score Overview </th>
                    <th> Pool date </th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                        {{$qui->usuario}}
                        </td>
                        <td>
                        {{$qui->puntaje}}
                        </td>
                        <td>
                                {{$qui->acumuladoUser}}
                        </td>
                        <td>
                          {{date('M/d/Y h:i A',strtotime($qui->fecha))}}
                            {{-- <a class="navBacka" href="/perfil/{{$qui->id}}/">See perfil</a> --}}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endforeach

    @endif

                </div>
              </div>
            </div>
    </section>

@endsection
@section('footer')

@endsection
