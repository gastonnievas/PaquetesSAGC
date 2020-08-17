<?php

namespace App\Http\Controllers;

use App\Paquete;
use App\Empresa;
use App\TiposEnvio;
use App\Persona;
use Illuminate\Http\Request;

class PaquetesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paquetes = Paquete::orderBy('id', 'DESC')->get();
        $empresas = Empresa::all();
        $tiposEnvios = TiposEnvio::all();
        $personas = Persona::all();

        return view('paquetes.index', compact('paquetes','empresas', 'tiposEnvios', 'personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresas = Empresa::all();        
        $tiposEnvios = TiposEnvio::all();        
        $personas = Persona::all();

        return view('paquetes.create', compact('empresas', 'tiposEnvios', 'personas'));
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
            'fecha_ingreso' => 'required',
            'id_empresa' => 'required',
            'id_tipo_ingreso' => 'required'            
        ]);

        Paquete::create($request->all());
        return back()->with('status', 'El paquete ha sido creado con éxito.');
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
        $paquete = Paquete::findOrFail($id);
        $empresas = Empresa::all();
        $selectedEmpresa = Paquete::find($id)->id_empresa;
        $tiposEnvios = TiposEnvio::all();
        $selectedIngreso = Paquete::find($id)->id_tipo_ingreso;
        $selectedEntrega = Paquete::find($id)->id_tipo_entrega;
        $personas = Persona::all();
        $selectedPersona = Paquete::find($id)->id_persona_retira;

        return view('paquetes.edit', compact('paquete','empresas', 'selectedEmpresa', 'tiposEnvios', 'selectedIngreso', 'selectedEntrega', 'personas', 'selectedPersona'));
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
            'fecha_ingreso' => 'required',
            'id_empresa' => 'required',
            'id_tipo_ingreso' => 'required'            
        ]);

        Paquete::findOrFail($id)->update($request->all());
        return back()->with('status', 'El paquete ha sido editado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Paquete::findOrFail($id)->delete();        
        return back()->with('status', 'El paquete ha sido eliminado con éxito.');
    }
}
