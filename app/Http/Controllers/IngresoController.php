<?php

namespace App\Http\Controllers;

use App\Ingreso;
use Illuminate\Http\Request;

class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Ingreso::all();
        return view('contacto.index',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Ingreso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = new Ingreso();
        $datos->nombre = $request->name;
        $datos->apellido = $request->lastname;
        $datos->numero = $request->number;
        $datos->ci = $request->cia;
        $datos->direccion = $request->address;
        $datos->save();
        $datos=Ingreso::all();
        return view('Ingreso.index',compact('datos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function show(Ingreso $ingreso)
    {
        return view('Ingreso.show',compact('Ingreso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingreso $ingreso)
    {
        return view('ingreso.edit',compact('ingreso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingreso $ingreso)
    {
        $Ingreso->nombre = $request->name;
        $Ingreso->apellido = $request->lastname;
        $Ingreso->numero = $request->number;
        $Ingreso->ci = $request->cia;
        $Ingreso->direccion = $request->address;
        $Ingreso->save();
        $datos=Ingreso::all();
        return view('Ingreso.index',compact('datos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingreso $ingreso)
    {
        $Ingreso->delete();
        $datos=Ingreso::all();
        return view('Ingreso.index',compact('datos'));
    }
}
