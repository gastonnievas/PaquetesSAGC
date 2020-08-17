<?php

namespace App;

use App\Empresa;
use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    // public function empresas()
    // {
    // 	return $this->belongTo('App\Empresa');
    // }

    // public static function dropdownGroup()
    // {
    // 	$domicilios = self::with('empresas')->get();
    // 	$response = [];
    // 	foreach($domicilios as $domicilio)
    // 	{
    // 		$response[$domicilio->empresas->name][] = $domicilio->name;
    // 	}
    // 	return $response;
    // }

    protected $fillable = [    	    	 
    	'id_empresa',
    	'calle',
    	'numero_calle',
    	'piso',
    	'oficina',
    	'id_localidad',
    	'observaciones'
    ];
    
}
