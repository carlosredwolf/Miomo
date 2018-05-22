<?php

namespace Miomo;

use Illuminate\Database\Eloquent\Model;
use Miomo\Jornada;
use Miomo\Partido;

class Jornada extends Model
{
    //

    public function index(){

      $jornada = Jornada::where('id_jornada','=', $id)->get();
      $partidos = Partido::where('id_jornada','=',$id)->get();

      $
    }
}
