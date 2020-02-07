<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ingresos extends Model
{
    protected $table='ingresos';

    protected $primaryKey='id_ingresos';


    // desactiva las etiquetas de tiempo.
    public $timestamps=false;
    public $incrementing=false;

    public $fillable=[
    	'id_ingresos',
    	'concepto',
        'cantidad',
        'tipo_pago',
    	'detalle',
    	'fecha',
    	'hora'
    ];
}
