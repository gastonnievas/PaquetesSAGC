<?php

namespace App;

use App\Domicilio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empresa extends Model
{
	use SoftDeletes;

	protected $primaryKey = 'id';
	public $incrementing =false;
	Protected $keyType = 'char';
    //
    // public function domicilios()
    // {
    //  return $this->hasOne('App\Domicilio');
    // }
    
    protected $fillable = [
    	'id',
    	'name', 
    	'cuit',
    	'email',
    	'codigo_telefono',
    	'telefono',
    	'socio',
    	'observaciones'
    ];
}
