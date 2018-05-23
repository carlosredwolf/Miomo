<?php

namespace Miomo;

use Illuminate\Database\Eloquent\Model;
use Miomo\Jornada;
use Miomo\Partido;

class Jornada extends Model
{
    //
    protected $table="jornadas";
    protected $hidden=['created_at','updated_at'];

    public function evento(){
      return $this->belongsTo('Miomo\Evento', 'id_evento');
    }

    public function partidos(){
      return $this->hasMany('Miomo\Partido', 'id_jornada');
    }

    public function status(){
      return $this->belongsTo('Miomo\Cat_Status', 'id_status');
    }
}
