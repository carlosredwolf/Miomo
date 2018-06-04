@extends('layouts.nav')

@section('content')
<link rel="stylesheet" href="/css/table.css">
<h1>Scores by Round</h1>
<h1><a class="navBacka" href="/admin">Back</a></h1>
<section class="quiniela">
        <div class="container">
          <div class="quiniela-container">
            <div class="contenido">
                <div class="datagrid"> 
                <table>
                    <thead>
                        <th>Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Birthday</th>
                    </thead>
                    <tbody>
                        @foreach ($allUsers as $user)
                        <tr>
                        <td> {{$user->nombre}} </td> 
                        <td> {{$user->apellidos}} </td>
                        <td> {{$user->correo}} </td> 
                        <td> {{$user->celular}} </td> 
                        <td> {{$user->fecha_nacimiento}} </td> 
                        </tr>   
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
          </div>
        </div>
    </section>             
    
@stop
