<?php

namespace App\Http\Controllers;

use App\Paquete;
use App\Empresa;
use App\TiposRecibo;
use App\Servicio;
use App\Recibo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportesController extends Controller
{
	public function index()
	{
		return view('reportes.index');
	}

  public function show($id)
  {
    
  }

	// public function show($id)
 //    {
    	
 //    }
  // REPORTE RECIBOS CON TOTALES ENTRE 2 FECHAS
  //   public function index(Request $request)
  // {
  // HACERLO CON RECIBOS. AGREGAR FECHA A RECIBOS
    // $empresas = Empresa::all();
    // $tiposRecibos = TiposRecibo::all();
    // $servicios = Servicio::all();
    // $desde = $request->get('desde');
    // $hasta = $request->get('hasta');
    // $totalImpuesto = Recibo::orderBy('fecha', 'ASC')->whereBetween('fecha', [$desde, $hasta])->sum('impuesto');
    // $totalRecargo = Recibo::orderBy('fecha', 'ASC')->whereBetween('fecha', [$desde, $hasta])->sum('recargo');
    // $totalRegistro = Recibo::orderBy('fecha', 'ASC')->whereBetween('fecha', [$desde, $hasta])->sum('registro');
    // $totalImpresion = Recibo::orderBy('fecha', 'ASC')->whereBetween('fecha', [$desde, $hasta])->sum('gastos_impresion');
    // $totalEnvio = Recibo::orderBy('fecha', 'ASC')->whereBetween('fecha', [$desde, $hasta])->sum('gastos_envio');
    // $recibos = Recibo::orderBy('fecha', 'ASC')->whereBetween('fecha', [$desde, $hasta])->get();

    // return view('reportes.reporte4', compact('empresas', 'tiposRecibos', 'servicios', 'recibos', 'totalImpuesto', 'totalRecargo', 'totalRegistro', 'totalImpresion', 'totalEnvio', 'desde', 'hasta'));
  // }


  // REPORTE PAQUETES ENTRE FECHAS
  //   public function show(Request $request)
  //   {
  //   	// HACERLO CON RECIBOS. AGREGAR FECHA A RECIBOS
		// $empresas = Empresa::all();
		// $desde = $request->get('desde');
		// $hasta = $request->get('hasta');
		// $paquetes = Paquete::orderBy('fecha_ingreso', 'ASC')->whereBetween('fecha_ingreso', [$desde, $hasta])->get();

		// return view('reportes.reporte3', compact('empresas', 'paquetes'));
  //   }

    // REPORTE MENSUAL DE PAQUETES
    // public function show(Request $request)
    // {
    // 	$empresas = Empresa::all();
    // 	$mes = $request->get('mes');
    // 	$anio = $request->get('anio');

    // 	$paquetes = Paquete::orderBy('fecha_ingreso', 'ASC')
    // 	->mes($mes)
    // 	->anio($anio)
    // 	->get();

    //     return view('reportes.reporte1', compact('paquetes', 'empresas'));
    // }



}