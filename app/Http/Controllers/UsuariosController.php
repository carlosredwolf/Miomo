<?php

namespace Miomo\Http\Controllers;

use Illuminate\Http\Request;
use Miomo\User;
use Miomo\Datos_Usuario;
use Miomo\cat__paises as Pais;
use Miomo\cat__estados as Estado;
use Auth;
class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //Esta función muestra los datos del usuario.
        $idUsuario=Auth::user()->id;
        $dataUser=Datos_Usuario::where('id_usuario','=', $idUsuario)->first();

        return view('perfil.index',array('dataUser' => $dataUser));
        //return response()->json($datosUsuario);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $usuario = User::find($id);
        $datosUsuario = Datos_Usuario::where('id_usuario',$id)->first();

        //return $datosUsuario;
        return view('admin.perfil',compact('datosUsuario'));
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
    public function update(Request $request)
    {
        //Método para actualizar datos del usuario.
        $idUsuario=Auth::user()->id;
        $datosUsuario = Datos_Usuario::find($idUsuario);
        $datosUsuario->nombre=$request->nombre;
        $datosUsuario->apellidos=$request->apellidos;
        $datosUsuario->fecha_nacimiento=$request->fecha_nacimiento;
        $datosUsuario->celular=$request->celular;
        $ciudad = Estado::where('estadonombre',$request->ciudad)->first();
        $datosUsuario->id_pais=$ciudad->ubicacionpaisid;
        $datosUsuario->id_ciudad=$ciudad->id;
        $datosUsuario->correo=$request->email;
        $datosUsuario->id_usuario=$idUsuario;
        //return response()->json($request);
         if($datosUsuario->save()){
             return redirect('perfil');

        }
        else
        {
            return back()->with('msgerror', 'Los datos no fueron guardados');
        }

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
}
