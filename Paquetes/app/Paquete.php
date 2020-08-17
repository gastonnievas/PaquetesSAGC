<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    protected $fillable = [ 
    	'fecha_ingreso',   	    	 
    	'id_empresa',
    	'id_tipo_ingreso',
    	'fecha_entrega',
    	'id_tipo_entrega',
    	'id_persona_retira',
    	'entregado'
    ];

    public function scopeMes($query, $mes)
    {
    	$query->whereMonth('fecha_ingreso', $mes);
    }

    public function scopeAnio($query, $anio)
    {
    	$query->whereYear('fecha_ingreso', $anio);
    }
}
