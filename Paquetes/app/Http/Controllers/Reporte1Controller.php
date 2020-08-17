<?php

namespace App\Http\Controllers;

use App\Paquete;
use App\Empresa;
use App\TiposRecibo;
use App\Servicio;
use App\Recibo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Reporte1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //REPORTE RECIBOS ENTRE FECHAS

        $empresas = Empresa::all();
        $tiposRecibos = TiposRecibo::all();
        $servicios = Servicio::all();
        $desde = $request->get('desde');
        $hasta = $request->get('hasta');
        
        $totalImpuesto = Recibo::orderBy('fecha', 'ASC')->whereBetween('fecha', [$desde, $hasta])->sum('impuesto');
        $totalRecargo = Recibo::orderBy('fecha', 'ASC')->whereBetween('fecha', [$desde, $hasta])->sum('recargo');
        $totalRegistro = Recibo::orderBy('fecha', 'ASC')->whereBetween('fecha', [$desde, $hasta])->sum('registro');
        $totalImpresion = Recibo::orderBy('fecha', 'ASC')->whereBetween('fecha', [$desde, $hasta])->sum('gastos_impresion');
        $totalEnvio = Recibo::orderBy('fecha', 'ASC')->whereBetween('fecha', [$desde, $hasta])->sum('gastos_envio');
        $recibos = Recibo::orderBy('fecha', 'ASC')->whereBetween('fecha', [$desde, $hasta])->get();

        return view('reporte1.index', compact('empresas', 'tiposRecibos', 'servicios', 'recibos', 'totalImpuesto', 'totalRecargo', 'totalRegistro', 'totalImpresion', 'totalEnvio', 'desde', 'hasta'));
    }

    
    public function show(Request $request)
    {
        $empresas = Empresa::all();
        $tiposRecibos = TiposRecibo::all();
        $servicios = Servicio::all();
        $desde = $request->get('desde');
        $hasta = $request->get('hasta');
        $totalImpuesto = Recibo::orderBy('fecha', 'ASC')->whereBetween('fecha', [$desde, $hasta])->sum('impuesto');
        $totalRecargo = Recibo::orderBy('fecha', 'ASC')->whereBetween('fecha', [$desde, $hasta])->sum('recargo');
        $totalRegistro = Recibo::orderBy('fecha', 'ASC')->whereBetween('fecha', [$desde, $hasta])->sum('registro');
        $totalImpresion = Recibo::orderBy('fecha', 'ASC')->whereBetween('fecha', [$desde, $hasta])->sum('gastos_impresion');
        $totalEnvio = Recibo::orderBy('fecha', 'ASC')->whereBetween('fecha', [$desde, $hasta])->sum('gastos_envio');
        $recibos = Recibo::orderBy('fecha', 'ASC')->whereBetween('fecha', [$desde, $hasta])->get();
        $view = view('reporte1.show', compact('empresas', 'tiposRecibos', 'servicios', 'recibos', 'totalImpuesto', 'totalRecargo', 'totalRegistro', 'totalImpresion', 'totalEnvio', 'desde', 'hasta'));

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('recibos.pdf');
    }

}
