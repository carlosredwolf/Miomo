<?php

namespace Miomo\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use GuzzleHttp\Client;
use Miomo\Jornada;
use Miomo\Evento;
use Miomo\Partido;
use stdClass;

class AdminController extends Controller
{
    //
    const TORNEO = 1;
    //const URL = 'https://miomo-api.herokuapp.com/api/';

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

      return view('admin.admin',compact('jornadas'));
    }

    public function jornada($id)
    {
      $jornada = $this->getJornada($id);

      $name = $jornada->descripcion;
      $partidos = $jornada->partidos;
      $partidosStr = json_encode($partidos);

      return view('admin.jornada',compact('partidos','name','partidosStr'));

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

    public function store(Request $request)
    {
      // code...
      $response = $request->input();
      $partidos = json_decode($response['partidos']);
      foreach ($response as $key => $value) {
        // code...
        if (strpos($key,'score')!== false) {
          // code...
          $score = new stdClass;
          $partido = explode('-',$key);
          $score->partido = intval($partido[1]);
          $score->valor = intval($value);

          array_push($radios,$radio);
          unset($radio);
        }
      }
      //$response = json_decode($response);
      return $partidos;
    }

    public function activar($id)
    {
      // code...
      $jornada = Jornada::find($id);
      $status = $jornada->id_status;

      if ($status == 1) {
        // code...
        $jornada->id_status = 3;
      }elseif($status == 3) {
        // code...
        $jornada->id_status = 1;
      }

      $jornada->save();
      return redirect('admin');
    }

    public function abrir($id)
    {
      // code...
      $jornada = Jornada::find($id);
      $status = $jornada->id_status;

      if ($status == 1) {
        // code...
        $jornada->id_status = 2;
      }elseif($status == 2) {
        // code...
        $jornada->id_status = 1;
      }

      $jornada->save();
      return redirect('admin');
    }
}
