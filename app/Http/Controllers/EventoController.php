<?php

namespace Miomo\Http\Controllers;

use Miomo\Evento;
use Illuminate\Http\Request;
use stdClass;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $eventos = Evento::all();
        if (!$eventos) {
          return response()->json(['mensaje'=> 'NO existe ese fabricante','codigo'=>'404'],404);
        }
        $eventosArr = array();
        foreach ($eventos as $evento) {
          // code...
          $response = new stdClass;

          $response->nombre = $evento->nombre;
          $response->fecha_inicio = $evento->fecha_inicio;
          $response->fecha_fin = $evento->fecha_fin;
          $response->comentarios = $evento->comentarios;
          $response->anfitrion = $evento->anfitrion;
          $response->ganador = $evento->ganador;
          $response->finalista = $evento->finalista;
          $response->status = $evento->status;

          array_push($eventosArr,$response);
        }


        return response()->json(['eventos'=> $eventosArr],202);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \Miomo\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $evento=Evento::find($id);
        if (!$evento) {
          return response()->json(['mensaje'=> 'NO existe ese evento','codigo'=>'404'],404);
        }

        $response = new stdClass;

        $response->nombre = $evento->nombre;
        $response->fecha_inicio = $evento->fecha_inicio;
        $response->fecha_fin = $evento->fecha_fin;
        $response->comentarios = $evento->comentarios;
        $response->anfitrion = $evento->anfitrion;
        $response->ganador = $evento->ganador;
        $response->finalista = $evento->finalista;
        $response->status = $evento->status;

        return response()->json(['evento'=> $response],202);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Miomo\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Miomo\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Miomo\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        //
    }
}
