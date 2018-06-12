@extends('layouts.nav')

@section('content')
<link rel="stylesheet" href="/css/table.css">
<h1>Users</h1>
<h1><a class="navBacka" href="/admin">Back</a></h1>
<section class="quiniela">
        <div class="container">
          <div class="quiniela-container">
            <div class="contenido">
                <div class="datagrid">
                <table>

                    <thead>
                        <th>Nickname</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Registered Country</th>
                        <th>Birthday</th>
                        <th>Create date</th>
                        <th>Options</th>

                    </thead>
                    <tbody>
                        @foreach ($usuariosData as $user)
                        <tr>
                        <td><a style="color:#CCB089;" href="profile/{{$user->id_usuario}}">{{$user->nickname}}</a></td>
                        <td> {{$user->correo}} </td>
                        <td> {{$user->celular}} </td>
                        <td> {{$user->pais}} </td>
                        <td> {{$user->fecha_nacimiento}} </td>
                        <td> {{$user->created_at}} </td>
                        @if($user->id_rol!=1)
                          <td><a onclick="return confirm('Sure to delete user?')" href="/userdelete/{{$user->id_usuario}}/" class="navback">Delete user</a></td>
                        @endif

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
