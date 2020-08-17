<?php

namespace App\Http\Controllers;

use App\Paquete;
use App\Empresa;
use App\TiposRecibo;
use App\Servicio;
use App\Recibo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Reporte2Controller extends Controller
{
	public function index(Request $request)
	{
		//REPORTE MENSUAL DE RECIBOS

		$empresas = Empresa::all();
        $tiposRecibos = TiposRecibo::all();
        $servicios = Servicio::all();
        $mes = $request->get('mes');
    	$anio = $request->get('anio');
        
        $totalImpuesto = Recibo::orderBy('fecha', 'ASC')->mes($mes)
    	->anio($anio)->sum('impuesto');
        $totalRecargo = Recibo::orderBy('fecha', 'ASC')->mes($mes)
    	->anio($anio)->sum('recargo');
        $totalRegistro = Recibo::orderBy('fecha', 'ASC')->mes($mes)
    	->anio($anio)->sum('registro');
        $totalImpresion = Recibo::orderBy('fecha', 'ASC')->mes($mes)
    	->anio($anio)->sum('gastos_impresion');
        $totalEnvio = Recibo::orderBy('fecha', 'ASC')->mes($mes)
    	->anio($anio)->sum('gastos_envio');

        $recibos = Recibo::orderBy('fecha', 'ASC')->mes($mes)
    	->anio($anio)->get();

        return view('reporte2.index', compact('empresas', 'tiposRecibos', 'servicios', 'recibos', 'totalImpuesto', 'totalRecargo', 'totalRegistro', 'totalImpresion', 'totalEnvio', 'mes', 'anio'));   
    	
	}
}