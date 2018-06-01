<?php

namespace Miomo\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use GuzzleHttp\Client;
use Miomo\Jornada;
use Miomo\Evento;
use Miomo\Partido;
use Miomo\Quiniela;
use stdClass;
use Auth;
use Miomo\Datos_Usuario as Data;
class EventoController extends Controller
{
    //
    const TORNEO = 1;

    public function __construct(){
      $this->middleware('auth');
    }

    public function show($id = self::TORNEO){

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

      $responseData = $jornadasArr;
      $jornadas = $responseData;

      $idUsuario=Auth::user()->id;
      $data=Data::Where('id_usuario',$idUsuario)->first();
      //$data =Data::find(Auth::user()->id);
      //return response()->json($data->id_rol);

      return view('quiniela.quiniela',compact('jornadas','data'));
    }

    public function jornada($id)
    {

      $jornada = $this->getJornada($id);
      Session::put('jornada',$jornada);

      $jornadaSig = $this->getJornada($jornada->sig_jornada);
      Session::put('jornadaSig',$jornadaSig);

      $name = $jornada->descripcion;
      $partidos = $jornada->partidos;
      $partidosStr = json_encode($partidos);

      return view('quiniela.jornada',compact('partidos','name','partidosStr','id'));

    }

    public function resultados()
    {
      $jornada = Session::get('jornada');
      $name = $jornada->descripcion;
      $partidos = $jornada->partidos;

      return view('quiniela.resultados',compact('partidos','name'));

    }

    public function proximos()
    {
      $jornada = Session::get('jornadaSig');

      $name = $jornada->descripcion;
      $partidos = $jornada->partidos;

      return view('quiniela.proximos',compact('partidos','name'));

    }

    public function getJornada($id)
    {
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

      return $response;
    }
}
