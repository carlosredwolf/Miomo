<?php

namespace Miomo;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    //
    protected $table="grupos";
    protected $hidden=['created_at','updated_at'];
}
