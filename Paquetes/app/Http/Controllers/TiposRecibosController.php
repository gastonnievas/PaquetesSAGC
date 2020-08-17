<?php

namespace App\Http\Controllers;

use App\TiposRecibo;
use Illuminate\Http\Request;

class TiposRecibosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposRecibos = TiposRecibo::all();
        return view('tiposRecibos.index', compact('tiposRecibos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tiposRecibos.create');
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

        TiposRecibo::create($request->all());
        return back()->with('status', 'El tipo de recibo ha sido creado con éxito.');
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
        $tiposRecibo = TiposRecibo::findOrFail($id);
        return view('tiposRecibos.edit', compact('tiposRecibo'));
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

        TiposRecibo::findOrFail($id)->update($request->all());
        return back()->with('status', 'El tipo de recibo ha sido editado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TiposRecibo::findOrFail($id)->delete();        
        return back()->with('status', 'El tipo de recibo ha sido eliminado con éxito.');
    }
}
