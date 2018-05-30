<?php

namespace Miomo\Http\Controllers;

use Illuminate\Http\Request;
use Miomo\RolesInteres;
use Miomo\User;
use Miomo\Quiniela;
use Miomo\Partido;
use Miomo\Apuesta;
use Miomo\Jornada;
use stdClass;
use Illuminate\Support\Facades\DB;

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

    public function CalcularPuntosJornada($Jornada_id){
        //$AllQuinielas=Quiniela::all();
        
        $Quinielas=Quiniela::Where('id_jornada',$Jornada_id)->get();

        $Partidos=Partido::Where('id_jornada',$Jornada_id)->get();
        foreach ($Quinielas as $qui) {
        $Apuestas=DB::table('apuestas')->Where('id_quiniela','=',$qui->id)->get();
            # code...
        $ApuestaData=array();
        foreach ($Apuestas as $apuesta) {
            # code...
            $apuestaObj = new stdClass;
            $apuestaObj->id=$apuesta->id;
            $apuestaObj->Resultado=$apuesta->id_resultado;
            array_push($ApuestaData,$apuestaObj);
        }
        $PartidoData=array();
        foreach ($Partidos as $partido) {
            # code...
            $partidoObj = new stdClass;
            $partidoObj->id=$partido->id;
            $partidoObj->Resultado=$partido->id_resultado;
            array_push($PartidoData,$partidoObj);
        }
        //Inicializo mi puntaje en 0
        $Puntaje=0;
        //Recorro 16 veces por que son 16 partidos por jornada jaja
        for ($i=0; $i <16 ; $i++) { 
            # code...
           //Obtengo los resultados de cada uno 
         $ValorPartido=$PartidoData[$i]->Resultado;
         $ValorApuesta=$ApuestaData[$i]->Resultado;
           //Cada vez que los resultados coincidan añadimos 10 puntos
         if ($ValorPartido==$ValorApuesta) {
                # code...
            $Puntaje=$Puntaje+10;
        }            
    }
    if($Puntaje>=160) {

       $Puntaje=$Puntaje+50;

    } else if($Puntaje>=100) {

        $Puntaje=$Puntaje+30;

    } else if($Puntaje>=50) {

        $Puntaje=$Puntaje+5;
    }
        //La variable puntaje se la mandaremos a la tabla de quinielas
    $idQuiniela=$qui->id;
    $datosQuiniela = Quiniela::find($idQuiniela);

    $datosQuiniela->puntaje=$Puntaje;
    if($datosQuiniela->save()){
                //echo $Apuestas;
             return view('admin.alert.poolalert');
        }
        else
        {
            echo "Error guardando la actualizacion";
            //return view('admin.alert.alert');
        }
}

}
}
