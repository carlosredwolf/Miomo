<?php

namespace Miomo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RolesInteres extends Model
{
    //
    use SoftDeletes;
    
    protected $table="roles_interes";
    protected $fillable=[
        'apostador','book','visitante','nombre_usuario',
        ];
    protected $dates = ['deleted_at'];
    protected $hidden=['created_at','updated_at'];
}
