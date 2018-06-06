<?php

namespace Miomo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Datos_Usuario extends Model
{
    //
    use SoftDeletes;
    
    protected $table="datos__usuarios";
    protected $dates = ['deleted_at'];
    protected $hidden=['created_at','updated_at'];
    protected $fillable=[
        'nombre','apellidos','id_pais','id_ciudad','fecha_nacimiento','celular','correo','id_usuario','id_rol',
        ];

    public function ciudad(){
      return $this->belongsTo('Miomo\cat__estados', 'id_ciudad');
    }

    public function pais(){
      return $this->belongsTo('Miomo\cat__paises', 'id_pais');
    }
}
