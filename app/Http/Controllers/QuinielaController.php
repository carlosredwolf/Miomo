<?php

namespace Miomo\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use View;
use Session;

class QuinielaController extends Controller
{
    //
    const URL = 'https://api.sportradar.us/soccer-xt3/intl/es/';
    const APIKEY = 'aghfck8a52fhv8vd7b5ssxt3';
    const TORNEO = 'sr:tournament:16';

    
    public function __construct(){
      $this->middleware('auth');
     
      $this->client = new Client([
        'base_uri' => self::URL
      ]);
    }

    public function index()
    {
      // code...
      return view('indexMiomo');
    }
    

    public function show($id = self::TORNEO)
    {
      // code...
      $response = $this->client->request('GET','tournaments/'.$id.'/schedule.json',['query' => ['api_key'=>self::APIKEY]]);
      $responseData = json_decode($response->getBody());

      $torneoNombre = $responseData->tournament->name;
      $torneoId = $responseData->tournament->id;

      $partidos = $responseData->sport_events;
      $jornadas = array();
      $faseFinal = array();

      foreach ($partidos as $partido) {
        if ($partido->tournament_round->type == 'group') {
            array_push($jornadas, $partido);
        }
      }

      foreach ($partidos as $partido) {
        if ($partido->tournament_round->type == 'cup') {
            array_push($faseFinal, $partido);
        }
      }

      $jornadas = collect($jornadas)->sortByDesc('scheduled');
      $jornadas = collect($jornadas)->sortBy('tournament_round.group');


      $jornadas =  collect($jornadas)->groupBy(function ($item, $key) {
                  if ($item->tournament_round) {
                      return $item->tournament_round->number;
                  }
              })->transform(function($item, $k) {
                  return $item->groupBy('tournament_round.group');
              });


      $faseFinal = collect($faseFinal)->sortBy('tournament_round.type');
      $faseFinal =  collect($faseFinal)->groupBy(function ($item, $key) {
                  if ($item->tournament_round) {
                      return $item->tournament_round->name;
                  }
              });

      // se guarda en la sesion los arreglos de partidos
      Session::put('jornadas',$jornadas);
      Session::put('faseFinal',$faseFinal);

      //return $jornadas;
      return view('quiniela.quiniela',compact('jornadas','faseFinal'));
    }

    public function jornada($id)
    {
      // code...
      $jornadas =Session::get('jornadas');
      Session::forget('fase');
      $jornada =$jornadas[$id];
      if ($id > 0) {
        $resulJ = $id;
        $nextJ = $id+1;
        Session::put('resulJ',$resulJ);
        Session::put('nextJ',$nextJ);
      }
      return view('quiniela.jornada',compact('id','jornada','jornadas'));
    }

    public function fase($name)
    {
      // code...
      $faseFinal =Session::get('faseFinal');
      $fase =$faseFinal[$name];
      $name = $fase[0]->tournament_round->name;
      Session::put('fase',$name);
      return view('quiniela.fase',compact('name','fase'));
    }

    public function resultados($id=0)
    {
      // code...
      $id=Session::get('resulJ');
      $jornadas = Session::get('jornadas');
      $faseFinal = Session::get('faseFinal');
      $fase =Session::get('fase');
      $numJ = count($jornadas);
      if ($fase) {
        // code...
        $resultados = $faseFinal[$fase];
        $name =$fase;

        return view('quiniela.resultadosR',compact('name','resultados'));
      }else {
        // code...
        $resultados = $jornadas[$id];
        return view('quiniela.resultados',compact('id','resultados','numJ'));
      }
    }

    public function proximos($id=0)
    {
      // code...
      $id=Session::get('nextJ');
      $jornadas = Session::get('jornadas');
      $faseFinal = Session::get('faseFinal');
      $fase =Session::get('fase');
      $numJ = count($jornadas);
      if ($id > $numJ) {
          $resultados = $faseFinal->first();
          $name =$resultados[0]->tournament_round->name;
          return view('quiniela.proximosR',compact('name','resultados'));
      }else {
        // code...
        $resultados = $jornadas[$id];
        return view('quiniela.proximos',compact('id','resultados','numJ'));
      }

    }

    public function proximosR($name)
    {
      $faseFinal = Session::get('faseFinal');
      $next = $this->roundChange($name);
      $resultados = $faseFinal[$next];
      return view('quiniela.proximosR',compact('next','resultados'));
    }

    public function roundChange($name)
    {
      if ($name == 'round_of_16') {
        return 'quarterfinal';
      }elseif ($name == 'quarterfinal') {
        return 'semifinal';
      }elseif ($name == 'semifinal') {
        return '3rd_place_final';
      }elseif ($name == '3rd_place_final') {
        return 'final';
      }elseif ($name == 'final') {
        return 'final';
      }
    }
}
