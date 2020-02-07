<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gastos extends Model
{
    protected $table='gastos';

    protected $primaryKey='id_gasto';


    // desactiva las etiquetas de tiempo.
    public $timestamps=false;
    public $incrementing=false;

    public $fillable=[
    	'id_gasto',
    	'concepto',
        'cantidad',
        'tipo_pago',
    	'detalle',
    	'fecha',
    	'hora'
    ];
}
