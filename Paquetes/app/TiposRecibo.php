<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TiposRecibo extends Model
{
    protected $fillable = [    	
    	'name'
    ];
}
