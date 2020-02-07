<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inicio extends Model
{
    protected $table='inicios';

    protected $primaryKey='id_inicio';


    // desactiva las etiquetas de tiempo.
    public $timestamps=false;
    public $incrementing=false;

    public $fillable=[
    	'id_inicio',
    	'cantidad'
    ];
}