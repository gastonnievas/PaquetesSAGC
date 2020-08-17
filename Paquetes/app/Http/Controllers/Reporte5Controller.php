<?php

namespace App\Http\Controllers;

use App\Paquete;
use App\Empresa;
use App\Persona;
use App\Recibo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Reporte5Controller extends Controller
{
    
    public function index(Request $request)
    {
        // REPORTES TOTALES
        $anio = $request->get('anio');
        // RECIBOS
        $totalImpuesto = Recibo::orderBy('fecha', 'ASC')->anio($anio)->sum('impuesto');
        $totalRecargo = Recibo::orderBy('fecha', 'ASC')->anio($anio)->sum('recargo');
        $totalRegistro = Recibo::orderBy('fecha', 'ASC')->anio($anio)->sum('registro');
        $totalImpresion = Recibo::orderBy('fecha', 'ASC')->anio($anio)->sum('gastos_impresion');
        $totalEnvio = Recibo::orderBy('fecha', 'ASC')->anio($anio)->sum('gastos_envio');
        // PAQUETES
        $totalIngresos = Paquete::orderBy('fecha_ingreso', 'ASC')->anio($anio)->count('fecha_ingreso');
        $totalEntregas = Paquete::orderBy('fecha_entrega', 'ASC')->anio($anio)->count('fecha_entrega');
        // EMPRESAS
        $totalEmpresas = Empresa::orderBy('id', 'ASC')->count('id');
        $totalSocios = Empresa::orderBy('id', 'ASC')->where('socio', '1')->count('socio');
        // PERSONAS
        $totalPersonas = Persona::orderBy('name', 'ASC')->count('id');

        return view('reporte5.index', compact('anio', 'totalImpuesto', 'totalRecargo', 'totalRegistro', 'totalImpresion', 'totalEnvio', 'totalIngresos', 'totalEntregas', 'totalEmpresas', 'totalSocios', 'totalPersonas'));
    }
}
