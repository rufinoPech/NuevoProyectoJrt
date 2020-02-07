<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inicio;

class ApiInicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return inicio::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inicio =new inicio;
        $inicio->id_inicio=$request->get('id_inicio');
        $inicio->concepto=$request->get('concepto');
        $inicio->cantidad=$request->get('cantidad');


        $inicio->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inicio=inicio::find($id);
        return $inicio;
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
        $inicio=inicio::find($id);
        $inicio->id_inicio=$request->get('id_inicio');
        $inicio->concepto=$request->get('concepto');
        $inicio->cantidad=$request->get('cantidad');

        $inicio->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return inicio::destroy($id);
    }
}
