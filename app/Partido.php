<?php

namespace Miomo;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    //
    protected $table="partidos";
    protected $hidden=['created_at','updated_at'];
}
