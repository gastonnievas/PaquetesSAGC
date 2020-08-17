<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{
    use SoftDeletes;

	protected $primaryKey = 'id';
	public $incrementing =false;
	Protected $keyType = 'char';

	protected $fillable = [
    	'id',
    	'name', 
    	'lastname',
    	'email',    	
    	'observaciones'
    ];
}
