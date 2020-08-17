<?php

namespace App\Http\Controllers;

use App\Paquete;
use App\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Reporte4Controller extends Controller
{
	public function index(Request $request)
	{
		//REPORTE MENSUAL DE PAQUETES

    	$empresas = Empresa::all();
    	$mes = $request->get('mes');
    	$anio = $request->get('anio');

    	$totalIngresos = Paquete::orderBy('fecha_ingreso', 'ASC')->mes($mes)->anio($anio)->count('fecha_ingreso');
    	$totalEntregas = Paquete::orderBy('fecha_entrega', 'ASC')->mes($mes)->anio($anio)->count('fecha_entrega');
        
    	$paquetes = Paquete::orderBy('fecha_ingreso', 'ASC')->mes($mes)->anio($anio)->get();

        return view('reporte4.index', compact('paquetes', 'empresas', 'totalIngresos', 'totalEntregas', 'mes', 'anio'));
	}	
}