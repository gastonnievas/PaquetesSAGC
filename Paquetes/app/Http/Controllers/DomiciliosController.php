<?php

namespace App\Http\Controllers;

use App\Domicilio;
use App\Empresa;
use App\Localidade;
use Illuminate\Http\Request;

class DomiciliosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $domicilios = Domicilio::all();
        $empresas = Empresa::all();
        $localidades = Localidade::all();

        return view('domicilios.index', compact('domicilios', 'empresas', 'localidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {       
        $empresas = Empresa::orderBy('name', 'ASC')->get();        
        $localidades = Localidade::orderBy('name', 'ASC')->get();        
        return view('domicilios.create', compact('empresas', 'localidades'));
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
            'calle' => 'required|string|min:1',
            'numero_calle' => 'required'           
        ]);

        Domicilio::create($request->all());
        return back()->with('status', 'El domicilio ha sido creada con éxito.');
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
        $domicilio = Domicilio::findOrFail($id);
        $empresas = Empresa::all();
        $selectedEmpresa = Domicilio::find($id)->id_empresa;
        $localidades = Localidade::all();
        $selectedLocalidad = Domicilio::find($id)->id_localidad;

        return view('domicilios.edit', compact('domicilio', 'empresas', 'selectedEmpresa', 'localidades', 'selectedLocalidad'));        
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
            'calle' => 'required|string|min:1'            
        ]);

        Domicilio::findOrFail($id)->update($request->all());
        return back()->with('status', 'El domicilio ha sido editado con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Domicilio::findOrFail($id)->delete();        
        return back()->with('status', 'El domicilio ha sido eliminado con éxito.');
    }
}
