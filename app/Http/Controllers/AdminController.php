<?php

namespace Miomo\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use GuzzleHttp\Client;
use Miomo\Jornada;
use Miomo\Evento;
use Miomo\Partido;
use Miomo\EquipoGrupo;
use Miomo\Equipo;
use Miomo\Grupo;
use stdClass;
use Auth;
use Miomo\Datos_Usuario as Data;

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

      $data =Data::find(Auth::user()->id);

      return view('admin.admin',compact('jornadas','data'));
    }

    public function jornada($id)
    {
      $jornada = $this->getJornada($id);

      $id = $jornada->id;
      $name = $jornada->descripcion;
      $partidos = $jornada->partidos;
      $partidosStr = json_encode($partidos);

      $equipos = Equipo::all();

      return view('admin.jornada',compact('partidos','name','partidosStr','id','equipos'));
    }
      // $grupos = array();
      // $groups =Grupo::all();
      //
      // $equipos = array();
      //
      // foreach ($groups as $group) {
      //   // code...
      //   if ($group->id != 9) {
      //     // code...
      //     $grupo =new stdClass;
      //     reset($equipos);
      //     $grupo->id = $group->id;
      //     $grupo->nombre = $group->nombre;
      //     $grupo->descripcion = $group->descripcion;
      //     $teams = EquipoGrupo::where('id_grupo',$group->id)->get();
      //
      //     foreach ($teams as $team) {
      //       // code...
      //       $equipo = new stdClass;
      //       $equipo->id =$team->id;
      //       $teamDB =Equipo::find($team->id);
      //       $equipo->name =$teamDB->nombre;
      //
      //       array_push($equipos,$equipo);
      //       unset($equipo);
      //     }
      //     $grupo->equipos =$equipos;
      //
      //     array_push($grupos,$grupo);
      //     unset($grupo);
      //   }
      //
      // }
      //
      // return $grupos;
      //return $groups;
      //return view('admin.jornada',compact('partidos','name','partidosStr','id'));

    //}

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
      $equipos = array();
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

      foreach ($response as $key => $value) {
        // code...
        if (strpos($key,'select')!== false) {
          // code...
          $partido = new stdClass;
          $equipo = explode('-',$key);
          $partido->id = intval($equipo[2]);
          if ($equipo[1] == 'local') {
            // code...
            $partido->equipo_local = intval($value);
          }else {
            // code...
            $partido->equipo_visitante = intval($value);
          }
          array_push($equipos,$partido);
          unset($partido);
        }
      }

      //$equipos = collect($equipos)->groupBy('id');
      $scores = collect($scores)->groupBy('partido');
      $partidos = collect($partidos)->groupBy('id');

      if (count($equipos)>0) {
        // code...
        foreach ($equipos as $equipo) {
          // code...
            $partido =Partido::find($equipo->id);
            if (isset($equipo->equipo_local)) {
              // code...
              $partido->id_local = $equipo->equipo_local;
            }elseif (isset($equipo->equipo_visitante)) {
              // code...
              $partido->id_visitante = $equipo->equipo_visitante;
            }
            $partido->save();
        }
      }

      if (count($scores)>0) {
        // code...
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
      }

      //return $equipos;
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

    public function enProgreso($id)
    {
      // code...
      $jornada = Jornada::find($id);
      $status = $jornada->id_status;

      if ($status == 1) {
        // code...
        $jornada->id_status = 4;
      }elseif($status == 4) {
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
