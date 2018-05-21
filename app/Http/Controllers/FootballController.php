<?php

namespace Miomo\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use stdClass;

class FootballController extends Controller
{
    //
    const URL = 'http://livescore-api.com/api-client/';
    const APIKEY = 'BCTl6ldKrQhuuATF';
    const SECRET = 'fyYrjNWWzGoBh4LSHFdN0ryshPWMqQsF';
    const TORNEO = 85;

    public function __construct(){
      $this->client = new Client([
        'base_uri' => self::URL
      ]);
    }

    public function show($id = self::TORNEO){

      $response = $this->client->request('GET','leagues/list.json',['query' => ['key'=>self::APIKEY
      , 'secret' => self::SECRET, 'country' => $id]]);
      $responseData = json_decode($response->getBody());
      //$response = response()->json($responseData);

      $leagues = $responseData->data->league;
      $grupos = array();

      foreach ($leagues as $liga) {
        if ($liga->id > 792) {
          // code...
          $grupo = new stdClass();
          $grupo->id = $liga->id;
          $grupo->name = $liga->name;
          $responseGrupo = $this->client->request('GET','/fixtures/matches.json',['query' => ['key'=>self::APIKEY
          , 'secret' => self::SECRET, 'league' => $grupo->id]]);
          $responseDataG = json_decode($responseGrupo->getBody());

          $partidos = $responseDataG->data->fixtures;
          $grupo->partidos = $partidos;
          array_push($grupos, $liga);
        }
      }

      return $grupos;
    }

    public function getPartidos($id)
    {
      // code...
      $responseGrupo = $this->client->request('GET','/fixtures/matches.json',['query' => ['key'=>self::APIKEY
      , 'secret' => self::SECRET, 'league' => $id]]);

      $responseDataG = json_decode($responseGrupo->getBody());
      //$response = response()->json($responseDataG);

      return $responseDataG;
    }
}
