<?php

namespace App\Http\Controllers;

use App\Empresa;
use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $empresas = Empresa::orderBy('name', 'ASC')->get();
        return view('empresas.index', compact('empresas'));
        // // $empresas = Empresa::onlyTrashed()->get();
        // // return view('empresas.index', compact('empresas'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresas.create');
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
            'id' => 'required|string|min:1|max:999999|unique:empresas,id',
            'name' => 'required|string|min:1',
            'cuit' => 'required|string|min:1|max:11',
            'email' => 'required|string|min:1|max:50'           
        ]);

        Empresa::create($request->all());
        return back()->with('status', 'La empresa ha sido creada con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Empresa::withTrashed()->findOrFail($id)->restore();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa = Empresa::findOrFail($id);
        return view('empresas.edit', compact('empresa'));
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
            'id' => 'required|string|min:1|max:999999',
            'name' => 'required|string|min:1',
            'cuit' => 'required|string|min:1|max:11',
            'email' => 'required|string|min:1|max:50'           
        ]);

        Empresa::findOrFail($id)->update($request->all());
        return back()->with('status', 'La empresa ha sido editada con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Empresa::findOrFail($id)->delete();        
        return back()->with('status', 'La empresa ha sido eliminada con éxito.');        
    }
}
