<?php

namespace Miomo\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use stdClass;
use Miomo\Cat_Status;
use Miomo\Cat_Resultados;
use Miomo\Partido;
use Session;


class CommonController extends Controller
{
    //
    const URL = 'http://battuta.medunes.net/api/';
    const APIKEY = '9f5bf7869b8dd5faeb2735a6492885b5';

    public function __construct(){
      $this->client = new Client([
        'base_uri' => self::URL
      ]);
    }

    public function index()
    {
      $jornadaAct = Session::get('jornadaAct');
      $partidos = $jornadaAct->partidos;
      $partidosOut = array();
      foreach ($partidos as $partido) {
        $partidoObj = new stdClass;
        $partidoObj->id = $partido->id;
        $partidoObj->fecha_partido = $partido->fecha_partido;
        $partidoObj->hora_partido = $partido->hora_partido;
        $partidoObj->local = $partido->local;
        $partidoObj->visitante = $partido->visitante;

        array_push($partidosOut,$partidoObj);
      }
      //return $partidosOut;
      return view('indexMiomo',compact('partidosOut'));
    }

    public function catResultados(){
      $response = Cat_Resultados::all();

      return response()->json(['resultados'=> $response],202);
    }

    public function catStatus(){
      $response = Cat_Status::all();

      return response()->json(['status'=> $response],202);
    }

    public function paises()
    {
      // code...
      $response = $this->client->request('GET','country/all/',['query' => ['key'=>self::APIKEY]]);
      $responseData = json_decode($response->getBody());

      return $responseData;
    }

    public function estadospost($code){
      Session::put('codigo',$code);
      $msg = "Realizado.";
        return response()->json(array('msg'=> $msg), 200);
    }

    public function estados()
    {
      // code...
      $codigo =Session::get('codigo');

      $response = $this->client->request('GET','region/'.$codigo.'/all/',['query' => ['key'=>self::APIKEY]]);
      $responseData = json_decode($response->getBody());

      $estados = $this->mixEstados($responseData);

      return $estados;
    }

    public function ciudades($code, $state)
    {
      // code...
      $response = $this->client->request('GET','city/'.$code.'/search/',['query' => ['region' => $state,'key'=>self::APIKEY]]);
      $responseData = json_decode($response->getBody());

      $ciudades = $this->mixCiudades($responseData);

      return $ciudades;
    }

    public function mixCiudades($responseData)
    {
      // code...
      $ciudades =array();
      $i = 1;
      foreach ($responseData as $ciudad) {
        // code...
        $city = new stdClass();
        $city->id = $i;
        $city->name = $ciudad->city;

        $i++;

        array_push($ciudades, $city);
      }
      return $ciudades;
    }

    public function mixEstados($responseData)
    {
      // code...
      $estados = array();
      $i =1;
      if ($responseData[0]->country == 'mx') {
        // code...
        foreach ($responseData as $estado) {
          $state = new stdClass();
          $state->id = $i;
          $state->name = $estado->region;
          // code...
          $dName = explode(' ', $estado->region);
          if ($i == 1) {
            $state->display = $estado->region;
          }elseif($i == 3 || $i == 23 || $i == 19) {
            // code...
            $state->display = $dName[2].' '.$dName[3];
          }elseif ($i == 4 || $i == 24) {
              // code...
              $state->display = $dName[2].' '.$dName[3].' '.$dName[4];
          }elseif ($i == 15) {
            // code...
            $state->display = $estado->region;
          }elseif ($i == 30) {
            // code...
            $ver = explode('-', $dName[2]);
            $state->display = $ver[0];
          }else {
            // code...
            $state->display = $dName[2];
          }

          $i++;

          array_push($estados, $state);
        }

      }else{
        foreach ($responseData as $estado) {
          $state = new stdClass();
          $state->id = $i;
          $state->name = $estado->region;
          $state->display = $estado->region;

          $i++;

          array_push($estados, $state);
        }
      }
      return $estados;
    }



}
