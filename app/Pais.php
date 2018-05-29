<?php

namespace Miomo;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    //
    protected $table="paises";
    protected $hidden=['created_at','updated_at'];
}
