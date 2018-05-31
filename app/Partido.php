<?php

namespace Miomo;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    //
    protected $table="partidos";
    protected $hidden=['created_at','updated_at'];

    public function local(){
      return $this->belongsTo('Miomo\Equipo', 'id_local');
    }

    public function visitante(){
      return $this->belongsTo('Miomo\Equipo', 'id_visitante');
    }

    public function status(){
      return $this->belongsTo('Miomo\Cat_Status', 'id_status');
    }

    public function grupo(){
      return $this->belongsTo('Miomo\Grupo', 'id_grupo');
    }

    public function resultado(){
      return $this->belongsTo('Miomo\Cat_Resultados', 'id_resultado');
    }
    
}
