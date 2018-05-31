<?php

namespace Miomo;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    //
    protected $table="grupos";
    protected $hidden=['created_at','updated_at'];

    public function equipos(){
      return $this->hasMany('Miomo\EquipoGrupo', 'id_grupo');
    }
}
