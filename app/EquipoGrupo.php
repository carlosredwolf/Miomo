<?php

namespace Miomo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EquipoGrupo extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table="equipo_grupos";
    protected $hidden=['created_at','updated_at'];
    protected $fillable = [
        'id_grupo', 'id_equipo',
    ];

    public function equipo(){
      return $this->belongsTo('Miomo\Equipo', 'id_equipo');
    }
}
