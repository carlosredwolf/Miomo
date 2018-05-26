<?php

namespace Miomo;

use Illuminate\Database\Eloquent\Model;

class RolesInteres extends Model
{
    //
    protected $table="roles_interes";
    protected $fillable=[
        'apostador','book','visitante','nombre_usuario',
        ];
    protected $dates = ['deleted_at'];
    protected $hidden=['created_at','updated_at'];
}
