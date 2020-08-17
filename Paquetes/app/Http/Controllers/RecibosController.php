<?php

namespace App\Http\Controllers;

use App\Recibo;
use App\TiposRecibo;
use App\Empresa;
use App\Paquete;
use App\Servicio;
use Illuminate\Http\Request;

class RecibosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recibos = Recibo::orderBy('id', 'DESC')->get();
        $tiposRecibos = TiposRecibo::all();
        $empresas = Empresa::all();
        $paquetes = Paquete::all();
        $servicios = Servicio::all();

        return view('recibos.index', compact('recibos', 'tiposRecibos', 'empresas', 'paquetes', 'servicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiposRecibos = TiposRecibo::all();
        $empresas = Empresa::all();
        $paquetes = Paquete::all();
        $servicios = Servicio::all();

        return view('recibos.create', compact('tiposRecibos', 'empresas', 'paquetes', 'servicios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|string|min:1|max:999999|unique:recibos,id',
            'fecha' => 'required',
            'id_tipo_recibo' => 'required',
            'id_empresa' => 'required'
        ]);
        Recibo::create($request->all());
        return back()->with('status', 'El recibo ha sido creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recibo = Recibo::findOrFail($id);
        $empresas = Empresa::all();
        $selectedEmpresa = Recibo::find($id)->id_empresa;
        $tiposRecibos = TiposRecibo::all();
        $selectedTiposRecibo = Recibo::find($id)->id_tipo_recibo;
        $paquetes = Paquete::all();
        $selectedPaquete = Recibo::find($id)->id_paquete;
        $servicios = Servicio::all();
        $selectedServicio = Recibo::find($id)->id_servicio;

        return view('recibos.edit', compact('recibo', 'empresas', 'selectedEmpresa', 'tiposRecibos', 'selectedTiposRecibo', 'paquetes', 'selectedPaquete', 'servicios', 'selectedServicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required|string|min:1|max:999999'
        ]);
        
        Recibo::findOrFail($id)->update($request->all());
        return back()->with('status', 'El recibo ha sido editado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Recibo::findOrFail($id)->delete();        
        return back()->with('status', 'El recibo ha sido eliminado con éxito.');
    }
}
