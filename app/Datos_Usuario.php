<?php

namespace Miomo;

use Illuminate\Database\Eloquent\Model;

class Datos_Usuario extends Model
{
    //
    protected $table="datos__usuarios";
    protected $hidden=['created_at','updated_at'];
    protected $fillable=[
        'nombre','apellidos','pais','ciudad','fecha_nacimiento','celular','correo','id_usuario','id_rol',
        ];
}
