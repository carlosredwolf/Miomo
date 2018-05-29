<?php

namespace Miomo;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //
    protected $table="eventos";
    protected $hidden=['created_at','updated_at'];

    public function jornadas(){
      return $this->hasMany('Miomo\Jornada', 'id_evento');
    }

    public function anfitrion(){
      return $this->belongsTo('Miomo\Pais', 'id_anfitrion');
    }

    public function ganador(){
      return $this->belongsTo('Miomo\Equipo', 'id_ganador');
    }

    public function finalista(){
      return $this->belongsTo('Miomo\Equipo', 'id_finalista');
    }

    public function status(){
      return $this->belongsTo('Miomo\Cat_Status', 'id_status');
    }
}
