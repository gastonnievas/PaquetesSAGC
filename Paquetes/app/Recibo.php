<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recibo extends Model
{
    protected $fillable = [ 
    	'id',
        'fecha',
    	'id_tipo_recibo',   	    	 
    	'id_empresa',
    	'id_paquete',
    	'lote',
    	'id_servicio',
    	'impuesto',
    	'recargo', 
    	'registro',
    	'gastos_impresion',
    	'gastos_envio',
    	'otros_gastos',
    	'cantidad',
    	'observaciones',
    	'enviado_por_mail'
    ];

    public function scopeMes($query, $mes)
    {
        $query->whereMonth('fecha', $mes);
    }

    public function scopeAnio($query, $anio)
    {
        $query->whereYear('fecha', $anio);
    }
}
