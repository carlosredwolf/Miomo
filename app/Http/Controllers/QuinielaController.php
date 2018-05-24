<?php

namespace Miomo\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use View;
use Session;
use stdClass;
use Miomo\Quiniela;
use Miomo\Apuesta;
use Miomo\Jornada;
use Auth;

class QuinielaController extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }

    public function store(Request $request)
    {
      // code...
      //return $request->input('idJ');
      $response = $request->input();
      $partidos = json_decode($request->input('partidos'));
      $respuesta = new stdClass;
      $radios = array();
      $respuesta->token = $request->input('_token');
      $respuesta->id_user = Auth::user()->id;
      $respuesta->id_jornada = intval($request->input('idJ'));
      $respuesta->partidos = $partidos;
      foreach ($response as $key => $value) {
        // code...
        if (strpos($key,'radio')!== false) {
          // code...
          $radio = new stdClass;
          $partido = explode('-',$key);
          $radio->partido = intval($partido[1]);
          $radio->resultado = intval($value);

          array_push($radios,$radio);
          unset($radio);
        }
      }

        foreach ($respuesta->partidos as $partido) {
          foreach ($radios as $radio) {
            // code...
            if ($partido->id == $radio->partido) {
              // code...
              $partido->resultado->id = $radio->resultado;
            }
          }
        }

      $quiniela = Quiniela::create(['id_usuario' => $respuesta->id_user,
                                    'id_evento' => 1,
                                    'id_jornada' => $respuesta->id_jornada,
                                    'id_status' => 3]);

      $id_quiniela= $quiniela->id;

      foreach ($respuesta->partidos as $partido) {
        // code...
        $apuesta = Apuesta::create([
          'id_quiniela' =>   $id_quiniela,
          'id_partido' => $partido->id,
          'id_resultado' => $partido->resultado->id,
        ]);
      }

      return view('quiniela.alert.alert');
    }

    public function show($id = 0)
    {
      // code...
      $id = Auth::user()->id;
      $quinielas = Quiniela::where('id_usuario',$id)->get();

      return view('quiniela.misquinielas',compact('quinielas'));
    }

    public function quiniela($id,$jornada)
    {
      // code...
      $apuestas = Apuesta::where('id_quiniela',$id)->get();
      $jornada = Jornada::find($jornada);
      $partidos = $jornada->partidos;


      foreach ($partidos as $partido) {
        // code...
        foreach ($apuestas as $apuesta) {
          // code...
          if ($partido->id == $apuesta->id_partido) {
            $partido->resultado->id = $apuesta->id_resultado;
          }
        }
      }
      $name = $jornada->descripcion;
      $id = $jornada->id;
      $partidosStr = json_encode($partidos);
      return view('quiniela.jornadaQuiniela',compact('partidos','name','id','partidosStr'));
    }
}
