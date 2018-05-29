<?php

namespace Miomo;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    //
    protected $table="equipos";
    protected $hidden=['created_at','updated_at'];
}
