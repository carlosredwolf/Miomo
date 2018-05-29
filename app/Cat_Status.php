<?php

namespace Miomo;

use Illuminate\Database\Eloquent\Model;

class Cat_Status extends Model
{
    //
    protected $table="cat__status";
    protected $hidden=['created_at','updated_at'];
}
