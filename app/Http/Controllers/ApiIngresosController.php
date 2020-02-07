<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ingresos;

class ApiIngresosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ingresos::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $ingreso=new ingresos;
        $ingreso->id_ingresos=$request->get('id_ingresos');
        $ingreso->concepto=$request->get('concepto');
        $ingreso->cantidad=$request->get('cantidad');
        $ingreso->tipo_pago=$request->get('tipo_pago');
        $ingreso->detalle=$request->get('detalle');
        $ingreso->fecha=$request->get('fecha');
        $ingreso->hora=$request->get('hora');

        $ingreso->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ingreso=ingresos::find($id);
        return $ingreso;
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
        $ingreso=ingresos::find($id);
        $ingreso->id_ingresos=$request->get('id_ingresos');
        $ingreso->concepto=$request->get('concepto');
        $ingreso->cantidad=$request->get('cantidad');
        $ingreso->tipo_pago=$request->get('tipo_pago');
        $ingreso->detalle=$request->get('detalle');
         $ingreso->fecha=$request->get('fecha');
          $ingreso->hora=$request->get('hora');

        $ingreso->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return ingresos::destroy($id);
    }
}
