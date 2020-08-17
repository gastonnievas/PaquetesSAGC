<?php

namespace App\Http\Controllers;

use App\Paquete;
use App\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Reporte3Controller extends Controller
{
	public function index(Request $request)
	{
		// REPORTE PAQUETES ENTRE FECHAS

		$empresas = Empresa::all();
		$desde = $request->get('desde');
		$hasta = $request->get('hasta');

		$totalIngresos = Paquete::orderBy('fecha_ingreso', 'ASC')->whereBetween('fecha_ingreso', [$desde, $hasta])->count('fecha_ingreso');
    	$totalEntregas = Paquete::orderBy('fecha_ingreso', 'ASC')->whereBetween('fecha_ingreso', [$desde, $hasta])->count('fecha_entrega');
    	
		$paquetes = Paquete::orderBy('fecha_ingreso', 'ASC')->whereBetween('fecha_ingreso', [$desde, $hasta])->get();

		return view('reporte3.index', compact('empresas', 'paquetes', 'totalIngresos', 'totalEntregas', 'desde', 'hasta'));
    }

    
}