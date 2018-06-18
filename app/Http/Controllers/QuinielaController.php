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
use Miomo\Partido;
use Auth;
use Miomo\Datos_Usuario as Data;

class QuinielaController extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }

    public function store(Request $request)
    {
      // code...
      $response = $request->input();

      $respuesta = $this->getRespuesta($response);

      $quiniela = Quiniela::where('id_usuario',$respuesta->id_user)
                          ->where('id_jornada',$respuesta->id_jornada)
                          ->first();

      if (isset($quiniela->id)) {
        // code...
        $apuestas = Apuesta::where('id_quiniela',$quiniela->id)->delete();
        $quiniela->delete();

      }

      $quiniela = Quiniela::create(['id_usuario' => $respuesta->id_user,
                                    'id_evento' => 1,
                                    'id_jornada' => $respuesta->id_jornada,
                                    'id_status' => 3]);

      $id_quiniela= $quiniela->id;

      foreach ($respuesta->partidos as $partido) {
        // code...
        if ($partido->resultado->id != 4) {
          $apuesta = Apuesta::create([
            'id_quiniela' =>   $id_quiniela,
            'id_partido' => $partido->id,
            'id_resultado' => $partido->resultado->id,
          ]);
        }
      }

      return view('quiniela.alert.alert');
    }

    //
    public function show($id = 0)
    {
      // code...
      $id = Auth::user()->id;
      $quinielas = Quiniela::where('id_usuario',$id)->orderBy('id_jornada','asc')->get();
      $idUsuario=Auth::user()->id;
      $data=Data::Where('id_usuario',$idUsuario)->first();
      return view('quiniela.misquinielas',compact('quinielas','data'));
    }

    public function quiniela($id,$jornada)
    {
      // code...
      $apuestas = Apuesta::where('id_quiniela',$id)->get();
      $jornada = Jornada::find($jornada);
      $partidos = $jornada->partidos;
      $partidos = $partidos->sortBy('hora_partido')->sortBy('fecha_partido');
      $resultado = array();

      foreach ($partidos as $partido) {
        // code...
        foreach ($apuestas as $apuesta) {
          // code...
          if ($partido->id == $apuesta->id_partido) {
            if ($partido->resultado->id != 4) {
              // code...
              if ($partido->resultado->id == $apuesta->id_resultado) {
                // code...
                  $resultado[$partido->id] = 1;
              }else {
                // code...
                $resultado[$partido->id] = 0;
              }

            }else {
              // code...
              $resultado[$partido->id] = 2;
            }
            $partido->resultado->id = $apuesta->id_resultado;
          }else{
              $resultado[$partido->id] = 2;
          }
        }
      }
      $name = $jornada->descripcion;
      $idQ = $id;
      $id = $jornada->id;
      $partidosStr = json_encode($partidos);
      //return $resultado;
      return view('quiniela.jornada',compact('partidos','name','id','partidosStr','idQ','resultado'));
    }

    public function update(Request $request)
    {
      // code...
      $response = $request->input();
      $respuesta = $this->getRespuesta($response);

      $id_quiniela= $response['idQ'];

      foreach ($respuesta->partidos as $partido) {
        // code...
        if ($partido->resultado->id != 4) {
          $apuesta = Apuesta::where('id_quiniela',$id_quiniela)->where('id_partido',$partido->id)->first();
          $apuesta->id_resultado = $partido->resultado->id;
          $apuesta->save();
        }
      }

      return view('quiniela.alert.alert');
    }

    public function getRespuesta($response)
    {
      // code...
      $partidos = json_decode($response['partidos']);

      $respuesta = new stdClass;
      $radios = array();
      $respuesta->token = $response['_token'];
      $respuesta->id_user = Auth::user()->id;
      $respuesta->id_jornada = intval($response['idJ']);
      $respuesta->partidos = Partido::where('id_jornada',$respuesta->id_jornada)->get();

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

      foreach ($radios as $radio) {
        // code...
        foreach ($respuesta->partidos as $partido) if ($radio->partido == $partido->id) {
          // code...
          $partido->resultado->id = $radio->resultado;
        }
      }

      return $respuesta;
    }
}
