<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gastos;

class ApiGastosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return gastos::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $gasto=new gastos;
        $gasto->id_gasto=$request->get('id_gasto');
        $gasto->concepto=$request->get('concepto');
        $gasto->cantidad=$request->get('cantidad');
        $gasto->tipo_pago=$request->get('tipo_pago');
        $gasto->detalle=$request->get('detalle');
        $gasto->fecha=$request->get('fecha');
        $gasto->hora=$request->get('hora');

        $gasto->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gasto=gastos::find($id);
        return $gasto;
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
        $gasto=gastos::find($id);
        $gasto->id_gasto=$request->get('id_gasto');
        $gasto->concepto=$request->get('concepto');
        $gasto->cantidad=$request->get('cantidad');
        $gasto->tipo_pago=$request->get('tipo_pago');
        $gasto->detalle=$request->get('detalle');
         $gasto->fecha=$request->get('fecha');
          $gasto->hora=$request->get('hora');

        $gasto->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return gastos::destroy($id);
    }
}
