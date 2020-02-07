<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class ApiUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Usuario::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario=new Usuario;
        $usuario->nick=$request->get('nick');
        $usuario->password=$request->get('password');
        $usuario->nombre=$request->get('nombre');
        $usuario->apellidos=$request->get('apellidos');
        $usuario->curp=$request->get('curp');
        $usuario->edad=$request->get('edad');
        $usuario->cpostal=$request->get('cpostal');
        $usuario->celular=$request->get('celular');

        $usuario->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario=Usuario::find($id);
        return $usuario;
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
        $usuario=Usuario::find($id);
        $usuario->nick=$request->get('nick');
        $usuario->password=$request->get('password');
        $usuario->nombre=$request->get('nombre');
        $usuario->apellidos=$request->get('apellidos');
        $usuario->curp=$request->get('curp');
        $usuario->edad=$request->get('edad');
        $usuario->cpostal=$request->get('cpostal');
        $usuario->correo=$request->get('correo');
        $usuario->celular=$request->get('celular');

        

        $usuario->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Usuario::destroy($id);
    }
}
