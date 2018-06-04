<?php

namespace Miomo\Http\Middleware;

use Closure;
use Auth;
use Miomo\Datos_Usuario as Data;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next)
     {
         $idUsuario=Auth::user()->id;

         $data = Data::where('id_usuario',$idUsuario)->first();
         $valData=$data->id_rol;
         if($valData!=1){
         return redirect()->to('/login');
         }
         return $next($request);
     }
}
