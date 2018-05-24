<?php

namespace Miomo;

use Illuminate\Database\Eloquent\Model;

class Quiniela extends Model
{
    //
    protected $table="quinielas";
    protected $hidden=['created_at','updated_at'];
    protected $fillable = [
        'id_usuario', 'id_evento', 'id_jornada','id_status',
    ];

    public function usuario(){
      return $this->belongsTo('Miomo\User', 'id_usuario');
    }

    public function apuestas(){
      return $this->hasMany('Miomo\Apuesta', 'id_quiniela');
    }

    public function jornada(){
      return $this->belongsTo('Miomo\Jornada', 'id_jornada');
    }

    public function status(){
      return $this->belongsTo('Miomo\Cat_Status', 'id_status');
    }

    public function evento(){
      return $this->belongsTo('Miomo\Evento', 'id_evento');
    }
}
