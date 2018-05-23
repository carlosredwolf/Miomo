<?php

namespace Miomo\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use GuzzleHttp\Client;

class AdminController extends Controller
{
    //
    const TORNEO = 1;
    const URL = 'http://miomo.com.devel/api/';

    public function __construct(){
      $this->middleware('auth');
      $this->client = new Client([
        'base_uri' => self::URL
      ]);
    }

    public function show($id = self::TORNEO){
      $response = $this->client->request('GET','evento/'.$id.'/jornada');
      $responseData = json_decode($response->getBody());
      $rondas = $responseData->jornadas;

      $jornadas = array();
      $faseFinal = array();

      foreach ($rondas as $ronda) {
        // code...
        if ($ronda->id <= 3) {
          // code...
          array_push($jornadas, $ronda);
        }else {
          // code...
          array_push($faseFinal, $ronda);
        }
      }
      Session::put('jornadas',$jornadas);
      Session::put('faseFinal',$faseFinal);

      //return $jornadas;
      return view('quiniela.quinielaN',compact('jornadas','faseFinal'));

      //return count($jornadas);

      //return response()->json($jornadas,202);

    }
}
