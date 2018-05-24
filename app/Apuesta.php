<?php

namespace Miomo;

use Illuminate\Database\Eloquent\Model;

class Apuesta extends Model
{
    //
    protected $table="apuestas";
    protected $hidden=['created_at','updated_at'];
    protected $fillable = [
        'id_quiniela', 'id_partido', 'id_resultado',
    ];

    public function quiniela(){
      return $this->belongsTo('Miomo\Quiniela', 'id_quiniela');
    }

    public function resultado(){
      return $this->hasOne('Miomo\Cat_Resultados', 'id_resultado');
    }

    public function partido(){
      return $this->hasOne('Miomo\Partido', 'id_partido');
    }
}
