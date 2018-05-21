<?php

namespace Miomo;

use Illuminate\Database\Eloquent\Model;

class Datos_Usuario extends Model
{
    //
    protected $fillable=[
        'nombre','apellidos','pais','ciudad','fecha_nacimiento','celular','correo','id_usuario',
        ];
}
