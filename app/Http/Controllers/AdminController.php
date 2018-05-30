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

      return view('admin.admin',compact('jornadas'));
    }

    public function jornada($id)
    {
      $jornada = $this->getJornada($id);

      $id = $jornada->id;
      $name = $jornada->descripcion;
      $partidos = $jornada->partidos;
      $partidosStr = json_encode($partidos);

      return view('admin.jornada',compact('partidos','name','partidosStr','id'));

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

      $response->partidos = $partidos;

      $response->status = $jornada->status;

      return $response;
    }

    public function store(Request $request)
    {
      // code...
      $response = $request->input();
      $partidos = json_decode($response['partidos']);
      $scores =array();
      foreach ($response as $key => $value) {
        // code...
        if (strpos($key,'score')!== false) {
          // code...
          $score = new stdClass;
          $partido = explode('-',$key);
          $score->partido = intval($partido[1]);
          $score->score = intval($partido[2]);
          if (is_null($value)) {
            // code...
            $score->valor = null;
          }else {
            // code...
            $score->valor = intval($value);
          }


          array_push($scores,$score);
          unset($score);
        }
      }
      $scores = collect($scores)->groupBy('partido');
      $partidos = collect($partidos)->groupBy('id');

      foreach ($partidos as $partido) {
        // code...
        $partidoBD = Partido::find($partido->first()->id);

        foreach ($scores as $score) {
          // code...
          foreach ($score as $equipo) {
            // code...
            if ($partido->first()->id == $equipo->partido) {
              // code...
              if ($equipo->score == 1) {
                // code...
                $partidoBD->score_local = $equipo->valor;
              }elseif ($equipo->score == 2) {
                // code...
                $partidoBD->score_visitante = $equipo->valor;
              }
            }
          }
        }
        if (!is_null($partidoBD->score_local) && !is_null($partidoBD->score_visitante)) {
          // code...
          if ($partidoBD->score_local > $partidoBD->score_visitante) {
            // code...
            $partidoBD->id_resultado = 1;

          }elseif ($partidoBD->score_local == $partidoBD->score_visitante) {
            // code...
            $partidoBD->id_resultado = 2;

          }elseif ($partidoBD->score_local < $partidoBD->score_visitante) {
            // code...
            $partidoBD->id_resultado = 3;

          }
        }
        $partidoBD->save();
      }

      return view('admin.alert.alert');
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

    public function partido($id)
    {
      // code...
      
    }
}
