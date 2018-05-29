<?php

namespace Miomo;

use Illuminate\Database\Eloquent\Model;

class cat__paises extends Model
{
    //
    protected $table="cat__paises";
    protected $hidden=['created_at','updated_at'];

    public function estados(){
      return $this->hasMany('Miomo\cat__estados', 'ubicacionpaisid');
    }

}
