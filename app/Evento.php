<?php

namespace Miomo;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //

    protected $hidden=['created_at','updated_at'];

    public function jornadas(){
      return $this->hasMany('Miomo\Jornada', 'id_evento');
    }
}
