<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $table='users2';

    protected $primaryKey='nick';


    // desactiva las etiquetas de tiempo.
    public $timestamps=false;
    public $incrementing=false;

    public $fillable=[
    	'nick',
    	'password',
    	'nombre',
    	'apellidos',
    	'id_rol',
    	'active',
    	'curp',
    	'edad',
    	'cpostal',
    	'correo',
    	'celular'
    ];
}
