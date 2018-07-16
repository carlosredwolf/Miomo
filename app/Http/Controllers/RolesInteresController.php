<?php

namespace Miomo\Http\Controllers;

use Illuminate\Http\Request;
use Miomo\RolesInteres;
use Miomo\User;
use Miomo\Datos_Usuario;
use Miomo\Quiniela;
use Miomo\Partido;
use Miomo\Apuesta;
use Miomo\Jornada;
use stdClass;
use Illuminate\Support\Facades\DB;

class RolesInteresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rolinteres=new RolesInteres();
        $rolinteres->apostador=$request->input("apostador");
        $rolinteres->book=$request->input("book");
        $rolinteres->visitante=$request->input("visitante");
        $rolinteres->nombre_usuario=$request->input("nombre_usuario");
        $rolinteres->save();
        $msg = "Realizado.";

        return response()->json(array('msg'=> $msg), 200);
    }

    /**
     * Muestra la quiniela con mayor puntaje por jornada.
     * @param  int  $Jornada_id
     * @return \Illuminate\Http\Response
     */
    public function show($Jornada_id)
    {
        $pools=Quiniela::where('id_jornada',$Jornada_id)->get();

        $quinielas = array();
        foreach ($pools as $pool) {
          // code...
          $quiniela = new stdClass;
          $quiniela->id = $pool->id;
          $quiniela->puntaje = $pool->puntaje;

          $user = User::where('id',$pool->id_usuario)->first();
          $quiniela->usuario = $user->name;
          $quiniela->fecha = $pool->created_at;
          $quiniela->puntaje =$pool->puntaje;
          $quiniela->acumuladoUser =0;
          $poolsUser = Quiniela::where('id_usuario',$pool->id_usuario)->get();
          foreach ($poolsUser as $poolUser) {
            // code...
            $quiniela->acumuladoUser = $quiniela->acumuladoUser + $poolUser->puntaje;
          }

          array_push($quinielas, $quiniela);

          
        }
        $quinielas = collect($quinielas)->sortByDesc('acumuladoUser')->toArray();

        return view('admin.forms.puntajes',array('quiniela' => $quinielas,'id'=>$Jornada_id));

        //return response()->json($quinielas,200);
    }
    public function userquiniela($Quiniela_id){
        $quiniela_idUser=Quiniela::Where('id',$Quiniela_id)->first();
        $userData=Datos_Usuario::Where('id',$quiniela_idUser->id_usuario)->first();
        return view('admin.forms.jugadorperfil',array('userData' => $userData));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Realiza el cálculo de los puntos de la quiniela.
     * @param int $Jornada_id
     * @return \Illuminate\Http\Response
     */
    public function CalcularPuntosJornada($Jornada_id){

        $quinielas=Quiniela::where('id_jornada',$Jornada_id)->get();

        $partidos=Partido::where('id_jornada',$Jornada_id)->get();
            # code...
        foreach ($quinielas as $quiniela) {
          // code...
          $apuestas = Apuesta::where('id_quiniela',$quiniela->id)->get();

          $puntaje = 0;
          $aciertos = 0;
          foreach ($apuestas as $apuesta) {
            // code...
            foreach ($partidos as $partido) if ($apuesta->id_partido == $partido->id) {
              // code...
              if ($apuesta->id_resultado == $partido->id_resultado) {
                // code...
                $puntaje = $puntaje + 10;
                $aciertos = $aciertos +1;
              }
            }
          }
          if ($Jornada_id<=3) {
            if($puntaje>=160) {
              $puntaje=$puntaje+50;

            } else if($puntaje>=100) {
              $puntaje=$puntaje+30;

            } else if($puntaje>=50) {
              $puntaje=$puntaje+10;
            }
          }elseif ($Jornada_id == 4) {
            // code...
            if ($puntaje>=80) {
              // code...
              $puntaje=$puntaje+50;
            }
          }elseif ($Jornada_id == 5) {
            // code...
            if ($puntaje>=40) {
              // code...
              $puntaje = $puntaje+30;
            }
          }elseif ($Jornada_id == 6) {
            // code...
            if ($puntaje>=20) {
              // code...
              $puntaje = $puntaje+20;
            }
          }elseif ($Jornada_id == 7) {
            // code...
            if($puntaje == 20){
              $puntaje = $puntaje+20;
            }
          }

          $quiniela->puntaje = $puntaje;
          $quiniela->aciertos = $aciertos;
          $quiniela->save();
        }
          return view('admin.alert.poolalert');
    }
}
