<?php

namespace Miomo\Http\Controllers;

use Illuminate\Http\Request;
use Miomo\RolesInteres;
use Miomo\User;
use Miomo\Datos_Usuario;
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
     * Muestra la quiniela con mayor puntaje por jornada.
     * @param  int  $Jornada_id
     * @return \Illuminate\Http\Response
     */
    public function show($Jornada_id)
    {
        $Quinielas=Quiniela::Where('id_jornada',$Jornada_id)->orderBy('puntaje', 'desc')->get();
        
       return view('admin.forms.puntajes',array('quiniela' => $Quinielas));
        
       // return response()->json($Quinielas);
    }
    public function userquiniela($Quiniela_id){
        $quiniela_idUser=Quiniela::Where('id',$Quiniela_id)->first();
        $userData=Datos_Usuario::Where('id',$quiniela_idUser->id_usuario)->first();
        return view('admin.forms.jugadorperfil',array('userData' => $userData));
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

    /**
     * Realiza el cálculo de los puntos de la quiniela.
     * @param int $Jornada_id
     * @return \Illuminate\Http\Response
     */
    public function CalcularPuntosJornada($Jornada_id){
     
        $Quinielas=Quiniela::Where('id_jornada',$Jornada_id)->get();

        $Partidos=Partido::Where('id_jornada',$Jornada_id)->get();
        //Logica para jornadas        
        if ($Jornada_id<=3) {
            # code...
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
            echo $datosQuiniela;
            return view('admin.alert.poolalert');
        }
        else
        {
            echo "Error guardando la actualizacion";
                       
        }
    }
}
        //Termina primer if

        //Logica para 16vos final
        //Logica para los 16vos de final
if ($Jornada_id==4) {
                # code...
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
        for ($i=0; $i <8 ; $i++) { 
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
    if($Puntaje>=80) {

       $Puntaje=$Puntaje+50;

   } 
                        //La variable puntaje se la mandaremos a la tabla de quinielas
   $idQuiniela=$qui->id;
   $datosQuiniela = Quiniela::find($idQuiniela);

   $datosQuiniela->puntaje=$Puntaje;
   if($datosQuiniela->save()){
    echo $datosQuiniela;
    return view('admin.alert.poolalert');                               
}
else
{
    echo "Error guardando la actualizacion";
                            
}
}
}

//Logica para cuartos de final
if ($Jornada_id==5) {
                # code...
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
        for ($i=0; $i <4 ; $i++) { 
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
    if($Puntaje>=40) {

     $Puntaje=$Puntaje+30;

 } 
                        //La variable puntaje se la mandaremos a la tabla de quinielas
 $idQuiniela=$qui->id;
 $datosQuiniela = Quiniela::find($idQuiniela);

 $datosQuiniela->puntaje=$Puntaje;
 if($datosQuiniela->save()){
    echo $datosQuiniela;
    return view('admin.alert.poolalert');
}
else
{
    echo "Error guardando la actualizacion";
                           
}
}
}
//Logica para semifinal
if ($Jornada_id==6) {
                # code...
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
        for ($i=0; $i <2 ; $i++) { 
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
    if($Puntaje>=20) {

     $Puntaje=$Puntaje+20;

 } 
                        //La variable puntaje se la mandaremos a la tabla de quinielas
 $idQuiniela=$qui->id;
 $datosQuiniela = Quiniela::find($idQuiniela);

 $datosQuiniela->puntaje=$Puntaje;
 if($datosQuiniela->save()){
    echo $datosQuiniela;
    return view('admin.alert.poolalert');
}
else
{
    echo "Error guardando la actualizacion";
                            
}
}
}
//Logica para final
if ($Jornada_id==7) {
                        # code...
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
        for ($i=0; $i <1 ; $i++) { 
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
    if($Puntaje>=10) {

     $Puntaje=$Puntaje+20;

 }
                                //La variable puntaje se la mandaremos a la tabla de quinielas
 $idQuiniela=$qui->id;
 $datosQuiniela = Quiniela::find($idQuiniela);

 $datosQuiniela->puntaje=$Puntaje;
 if($datosQuiniela->save()){
    echo $datosQuiniela;
    return view('admin.alert.poolalert');
}
else
{
    echo "Error guardando la actualizacion";
                                    
}
}
}
}
}
