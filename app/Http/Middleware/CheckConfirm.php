<?php

namespace Miomo\Http\Middleware;

use Closure;
use Auth;
use Miomo\User;

class CheckConfirm
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
        $Usuario = User::find($idUsuario);
        $valData=$Usuario->confirmed;
        if($valData!=1){
        return redirect()->to('/comprobar');
        }
        return $next($request);
    }
}
