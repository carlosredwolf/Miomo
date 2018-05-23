<?php

namespace Miomo\Http\Controllers;

use Miomo\Jornada;
use Miomo\Evento;
use Miomo\Partido;
use stdClass;
use Illuminate\Http\Request;
use Carbon\Carbon;

class JornadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $evento = Evento::find($id);
        if (!$evento) {
          // code...
          return response()->json(['mensaje'=> 'NO existe ese evento','codigo'=>'404'],404);
        }
        $jornadas = $evento->jornadas;
        if (!$jornadas) {
          // code...
          return response()->json(['mensaje'=> 'NO existen jornadas de ese evento','codigo'=>'404'],404);
        }
        $jornadasArr = array();
        foreach ($jornadas as $jornada) {
          // code...
          $response = new stdClass;
          $response->id = $jornada->id;
          $response->nombre = $jornada->nombre;
          $response->descripcion = $jornada->descripcion;
          $response->sig_jornada = $jornada->sig_jornada;
          $response->fecha_inicio = $jornada->fecha_inicio;
          $response->fecha_fin = $jornada->fecha_fin;
          $response->status = $jornada->status;

          array_push($jornadasArr, $response);
        }
        return response()->json(['jornadas'=> $jornadasArr],202);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \Miomo\Jornada  $jornada
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        //
        $jornada = Jornada::find($id);
        if (!$jornada) {
          // code...
          return response()->json(['mensaje'=> 'NO existe esa jornada','codigo'=>'404'],404);
        }

        $response = new stdClass;

        $response->id = $jornada->id;
        $response->nombre = $jornada->nombre;
        $response->descripcion = $jornada->descripcion;
        $response->sig_jornada = $jornada->sig_jornada;
        $response->fecha_inicio = $jornada->fecha_inicio;
        $response->fecha_fin = $jornada->fecha_fin;

        $partidos = Partido::where('id_jornada', $response->id)->get();

        $partidos = $partidos->sortBy('hora_partido')->sortBy('fecha_partido');
        $partidosOut = array();
        foreach ($partidos as $partido) {
          $partidoObj = new stdClass;
          $partidoObj->id = $partido->id;
          $partidoObj->fecha_partido = $partido->fecha_partido;
          $partidoObj->hora_partido = $partido->hora_partido;
          $partidoObj->local = $partido->local;
          $partidoObj->visitante = $partido->visitante;
          $partidoObj->grupo = $partido->grupo;
          $partidoObj->status = $partido->status;
          $partidoObj->resultado = $partido->resultado;

          array_push($partidosOut,$partidoObj);
        }

        $response->partidos = $partidosOut;

        $response->status = $jornada->status;

        return response()->json(['jornada'=> $response],202);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Miomo\Jornada  $jornada
     * @return \Illuminate\Http\Response
     */
    public function edit(Jornada $jornada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Miomo\Jornada  $jornada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jornada $jornada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Miomo\Jornada  $jornada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jornada $jornada)
    {
        //
    }
}
