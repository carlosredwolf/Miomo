<?php

namespace Miomo\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use View;
use Input;

class PartidoController extends Controller
{
    //

    const URL = 'https://api.sportradar.us/soccer-xt3/intl/es/';
    const APIKEY = 'aghfck8a52fhv8vd7b5ssxt3';
    const TORNEO = 'sr:tournament:16';

    public function __construct(){
      $this->client = new Client([
        'base_uri' => self::URL
      ]);
    }

    public function partidos($id = self::TORNEO)
    {
      $response = $this->client->request('GET','tournaments/'.$id.'/schedule.json',['query' => ['api_key'=>self::APIKEY]]);

      $responseData = json_decode($response->getBody());

      $name = $responseData->tournament->name;
      $id = $responseData->tournament->id;

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

      $jornadas = collect($jornadas)->groupBy('tournament_round.number');
      $faseFinal = collect($faseFinal)->groupBy('tournament_round.name');

      return view('partidos.show',compact('id','name','jornadas','faseFinal'));
    }

    public function jornada($id)
    {
      $response = $this->client->request('GET','tournaments/'.self::TORNEO.'/schedule.json',['query' => ['api_key'=>self::APIKEY]]);

      $responseData = json_decode($response->getBody());

      $partidos = $responseData->sport_events;
      $jornadas = array();
      $faseFinal =array();

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

      $jornadas = collect($jornadas)->sortBy('tournament_round.group');
      $jornadas =  collect($jornadas)->groupBy(function ($item, $key) {
                  if ($item->tournament_round) {
                      return $item->tournament_round->number;
                  }
              });

      $jornada = $jornadas[$id];

      $faseFinal = collect($faseFinal)->sortBy('tournament_round.type');
      $faseFinal =  collect($faseFinal)->groupBy(function ($item, $key) {
                  if ($item->tournament_round) {
                      return $item->tournament_round->name;
                  }
              });

      //return view('partidos.jornada',compact('jornada','jornadas','id','faseFinal'));
      return view('partidos.jornada',compact('jornada','jornadas','id','faseFinal'));
    }

}
