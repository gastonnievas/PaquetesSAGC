<?php

namespace App\Http\Controllers;

use App\Recibo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Reporte6Controller extends Controller
{
	public function index(Request $request)
	{
		//REPORTE TOTALES INGRESOS ANUAL
        // REGISTROS
    	$anio = $request->get('anio');        
        $totalRegistro1 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '1')
    	->anio($anio)->sum('registro');
        $totalRegistro2 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '2')
        ->anio($anio)->sum('registro');
        $totalRegistro3 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '3')
        ->anio($anio)->sum('registro');
        $totalRegistro4 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '4')
        ->anio($anio)->sum('registro');
        $totalRegistro5 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '5')
        ->anio($anio)->sum('registro');
        $totalRegistro6 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '6')
        ->anio($anio)->sum('registro');
        $totalRegistro7 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '7')
        ->anio($anio)->sum('registro');
        $totalRegistro8 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '8')
        ->anio($anio)->sum('registro');
        $totalRegistro9 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '9')
        ->anio($anio)->sum('registro');
        $totalRegistro10 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '10')
        ->anio($anio)->sum('registro');
        $totalRegistro11 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '11')
        ->anio($anio)->sum('registro');
        $totalRegistro12 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '12')
        ->anio($anio)->sum('registro');
        $totalRegistro = Recibo::orderBy('fecha', 'ASC')->anio($anio)->sum('registro');
        // IMPRESION
        $totalImpresion1 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '1')
    	->anio($anio)->sum('gastos_impresion');
        $totalImpresion2 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '2')
        ->anio($anio)->sum('gastos_impresion');
        $totalImpresion3 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '3')
        ->anio($anio)->sum('gastos_impresion');
        $totalImpresion4 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '4')
        ->anio($anio)->sum('gastos_impresion');
        $totalImpresion5 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '5')
        ->anio($anio)->sum('gastos_impresion');
        $totalImpresion6 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '6')
        ->anio($anio)->sum('gastos_impresion');
        $totalImpresion7 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '7')
        ->anio($anio)->sum('gastos_impresion');
        $totalImpresion8 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '8')
        ->anio($anio)->sum('gastos_impresion');
        $totalImpresion9 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '9')
        ->anio($anio)->sum('gastos_impresion');
        $totalImpresion10 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '10')
        ->anio($anio)->sum('gastos_impresion');
        $totalImpresion11 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '11')
        ->anio($anio)->sum('gastos_impresion');
        $totalImpresion12 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '12')
        ->anio($anio)->sum('gastos_impresion');
        $totalImpresion = Recibo::orderBy('fecha', 'ASC')->anio($anio)->sum('gastos_impresion');
        //ENVIOS
        $totalEnvio1 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '1')
    	->anio($anio)->sum('gastos_envio');
        $totalEnvio2 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '2')
        ->anio($anio)->sum('gastos_envio');
        $totalEnvio3 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '3')
        ->anio($anio)->sum('gastos_envio');
        $totalEnvio4 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '4')
        ->anio($anio)->sum('gastos_envio');
        $totalEnvio5 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '5')
        ->anio($anio)->sum('gastos_envio');
        $totalEnvio6 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '6')
        ->anio($anio)->sum('gastos_envio');
        $totalEnvio7 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '7')
        ->anio($anio)->sum('gastos_envio');
        $totalEnvio8 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '8')
        ->anio($anio)->sum('gastos_envio');
        $totalEnvio9 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '9')
        ->anio($anio)->sum('gastos_envio');
        $totalEnvio10 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '10')
        ->anio($anio)->sum('gastos_envio');
        $totalEnvio11 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '11')
        ->anio($anio)->sum('gastos_envio');
        $totalEnvio12 = Recibo::orderBy('fecha', 'ASC')->whereMonth('fecha', '12')
        ->anio($anio)->sum('gastos_envio');
        $totalEnvio = Recibo::orderBy('fecha', 'ASC')->anio($anio)->sum('gastos_envio');

        return view('reporte6.index', compact('totalRegistro1', 'totalRegistro2', 'totalRegistro3', 'totalRegistro4', 'totalRegistro5', 'totalRegistro6', 'totalRegistro7', 'totalRegistro8', 'totalRegistro9', 'totalRegistro10', 'totalRegistro11', 'totalRegistro12', 'totalRegistro', 'totalImpresion1', 'totalImpresion2', 'totalImpresion3', 'totalImpresion4', 'totalImpresion5', 'totalImpresion6', 'totalImpresion7', 'totalImpresion8', 'totalImpresion9', 'totalImpresion10', 'totalImpresion11', 'totalImpresion12', 'totalImpresion', 'totalEnvio1', 'totalEnvio2', 'totalEnvio3', 'totalEnvio4', 'totalEnvio5', 'totalEnvio6', 'totalEnvio7', 'totalEnvio8', 'totalEnvio9', 'totalEnvio10', 'totalEnvio11', 'totalEnvio12', 'totalEnvio', 'anio'));   
    	
	}
}