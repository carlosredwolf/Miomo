<?php

namespace Miomo\Http\Controllers;

use Illuminate\Http\Request;
use Miomo\RolesInteres;
use Miomo\User;
use Miomo\Quiniela;
use Miomo\Partidos;
use Miomo\Apuesta;

class RolesInteresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $rolinteres=new RolesInteres();
        $rolinteres->apostador=$request->input("apostador");
        $rolinteres->book=$request->input("book");
        $rolinteres->visitante=$request->input("visitante");
        $rolinteres->nombre_usuario=$request->input("nombre_usuario");
        $rolinteres->save();
        $msg = "Realizado.";
        
        return response()->json(array('msg'=> $msg), 200);    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function CalcularPuntosJornada(){
        $Apuestas=Apuesta::All();
        return response()->json($Apuestas);
    }
}
