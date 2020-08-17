<?php

namespace App\Http\Controllers;

use App\TiposEnvio;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class TiposEnviosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $tiposEnvios = TiposEnvio::all();
        return view('tiposEnvios.index', compact('tiposEnvios'));
    }

    public function pdf(){
        $tiposEnvios = TiposEnvio::all();
        $pdf = PDF::loadView('pdf.tiposEnvios', compact('tiposEnvios'));
        return $pdf->download('listado.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tiposEnvios.create');
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
            'name' => 'required|string|min:1'            
        ]);

        TiposEnvio::create($request->all());
        return back()->with('status', 'El tipo de envío ha sido creado con éxito.');
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
        $tiposEnvio = TiposEnvio::findOrFail($id);
        return view('tiposEnvios.edit', compact('tiposEnvio'));
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
            'name' => 'required|string|min:1|max:999999'            
        ]);

        TiposEnvio::findOrFail($id)->update($request->all());
        return back()->with('status', 'El tipo de envío ha sido editado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TiposEnvio::findOrFail($id)->delete();        
        return back()->with('status', 'El tipo de envío ha sido eliminado con éxito.');
    }
}
