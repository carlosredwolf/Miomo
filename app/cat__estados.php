<?php

namespace Miomo;

use Illuminate\Database\Eloquent\Model;

class cat__estados extends Model
{
    //
    protected $table="cat__estados";
    protected $hidden=['created_at','updated_at'];

    public function pais(){
      return $this->belongsTo('Miomo\cat__paises', 'id');
    }
}
