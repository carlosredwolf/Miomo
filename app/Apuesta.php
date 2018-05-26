<?php

namespace Miomo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Apuesta extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table="apuestas";
    protected $hidden=['created_at','updated_at'];
    protected $fillable = [
        'id_quiniela', 'id_partido', 'id_resultado',
    ];

    public function quiniela(){
      return $this->belongsTo('Miomo\Quiniela', 'id_quiniela');
    }

    public function resultado(){
      return $this->belongsTo('Miomo\Cat_Resultados', 'id_resultado');
    }

    public function partido(){
      return $this->belongsTo('Miomo\Partido', 'id_partido');
    }
}
