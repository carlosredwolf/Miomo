<?php

namespace Miomo\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use stdClass;
use Miomo\Cat_Status;
use Miomo\Cat_Resultados;
use Miomo\cat__paises as Pais;
use Miomo\cat__estados as Estado;
use Miomo\Partido;
use Session;
use Carbon\Carbon;


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
      $today = Carbon::now();
      $start = Carbon::parse('2018-06-14');

      $now = ($today >= $start) ? $today : $start;
      $end = Carbon::parse($now->toDateString());
      $end->addDays(5);

      $partidos = Partido::whereBetween('fecha_partido',[$now->toDateString(),$end->toDateString()])->orderBy('fecha_partido')->get();

      return view('indexMiomo',compact('partidos'));
    }

    public function catResultados(){
      $response = Cat_Resultados::all();

      return response()->json(['resultados'=> $response],202);
    }

    public function catStatus(){
      $response = Cat_Status::all();

      return response()->json(['status'=> $response],202);
    }

    // public function paises()
    // {
    //   // code...
    //   $response = $this->client->request('GET','country/all/',['query' => ['key'=>self::APIKEY]]);
    //   $responseData = json_decode($response->getBody());
    //
    //   return $responseData;
    // }

    public function paises()
    {
      // code...
      $paises = Pais::all();
      $paises = collect($paises)->sortBy('paisnombre');
      return response()->json($paises,202);

    }

    public function estadospost($code){
      Session::put('codigo',$code);
      $msg = "Realizado.";
        return response()->json(array('msg'=> $msg), 200);
    }

    // public function estados()
    // {
    //   // code...
    //   $codigo =Session::get('codigo');
    //
    //   $response = $this->client->request('GET','region/'.$codigo.'/all/',['query' => ['key'=>self::APIKEY]]);
    //   $responseData = json_decode($response->getBody());
    //
    //   $estados = $this->mixEstados($responseData);
    //
    //   return $estados;
    // }

    public function estados()
    {
      // code...
      $codigo =Session::get('codigo');

      $estados = Estado::where('ubicacionpaisid',$codigo)->get();
      return response()->json($estados,202);
    }

}
