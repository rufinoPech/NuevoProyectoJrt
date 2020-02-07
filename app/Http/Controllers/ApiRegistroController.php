<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registro;

class ApiRegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Registro::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registro=new Registro;
        $registro->nick=$request->get('nick');
        $registro->password=$request->get('password');
        $registro->nombre=$request->get('nombre');
        $registro->apellidos=$request->get('apellidos');
        $registro->id_rol=$request->get('id_rol');
        $registro->active=$request->get('active');
        $registro->curp=$request->get('curp');
        $registro->edad=$request->get('edad');
        $registro->cpostal=$request->get('cpostal');
        $registro->correo=$request->get('correo');
        $registro->celular=$request->get('celular');


        $registro->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registro=Registro::find($id);
        return $registro;
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
        $registro=Registro::find($id);
        $registro->nick=$request->get('nick');
        $registro->password=$request->get('password');
        $registro->nombre=$request->get('nombre');
        $registro->apellidos=$request->get('apellidos');
        $registro->id_rol=$request->get('id_rol');
        $registro->active=$request->get('active');
        $registro->curp=$request->get('curp');
        $registro->edad=$request->get('edad');
        $registro->cpostal=$request->get('cpostal');
        $registro->correo=$request->get('correo');
        $registro->celular=$request->get('celular');

        $registro->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Registro::destroy($id);
    }
}
