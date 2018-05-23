<?php

namespace Miomo\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use GuzzleHttp\Client;
use Miomo\Jornada;

class AdminController extends Controller
{
    //
    const TORNEO = 1;
    const URL = 'https://miomo-api.herokuapp.com/api/';

    public function __construct(){
      $this->middleware('auth');
      $this->client = new Client([
        'base_uri' => self::URL
      ]);
    }

    public function show($id = self::TORNEO){
      $response = $this->client->request('GET','evento/'.$id.'/jornada');
      $responseData = json_decode($response->getBody());
      $jornadas = $responseData->jornadas;

      return view('quiniela.quinielaN',compact('jornadas'));

      //return response()->json($jornadas,202);

    }

    public function jornada($id)
    {
      // code...
      $response = $this->client->request('GET','jornada/'.$id);
      $responseData = json_decode($response->getBody());
      $jornada = $responseData->jornada;

      //return response()->json($responseData->jornada->id,202);
      Session::put('id',$jornada->id);
      Session::put('sig',$jornada->sig_jornada);
      $name = $jornada->descripcion;
      $partidos = $jornada->partidos;

      return view('quiniela.jornadaN',compact('partidos','name'));

    }

    public function resultados()
    {
      // code...
      $id = Session::get('id');
      $response = $this->client->request('GET','jornada/'.$id);
      $responseData = json_decode($response->getBody());
      $jornada = $responseData->jornada;

      //return response()->json($responseData->jornada->id,202);
      $name = $jornada->descripcion;
      $partidos = $jornada->partidos;

      return view('quiniela.resultadosN',compact('partidos','name'));

    }

    public function proximos()
    {
      // code...
      $id = Session::get('sig');
      $response = $this->client->request('GET','jornada/'.$id);
      $responseData = json_decode($response->getBody());
      $jornada = $responseData->jornada;

      //return response()->json($responseData->jornada->id,202);
      $name = $jornada->descripcion;
      $partidos = $jornada->partidos;

      return view('quiniela.proximosN',compact('partidos','name'));

    }
}
