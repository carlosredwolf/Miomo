<?php

namespace Miomo;

use Illuminate\Database\Eloquent\Model;

class Cat_Usuario extends Model
{
    //
    protected $table="cat__usuarios";
    protected $hidden=['created_at','updated_at'];
}
