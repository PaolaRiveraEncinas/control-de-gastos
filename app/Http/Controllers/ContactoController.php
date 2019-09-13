<?php

namespace App\Http\Controllers;

use App\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Contacto::all();
        return view('contacto.index',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = new Contacto();
        $datos->nombre = $request->name;
        $datos->apellido = $request->lastname;
        $datos->numero = $request->number;
        $datos->ci = $request->cia;
        $datos->direccion = $request->address;
        $datos->save();
        $datos=Contacto::all();
        return view('contacto.index',compact('datos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function show(Contacto $contacto)
    {
        return view('contacto.show',compact('contacto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacto $contacto)
    {
        return view('contacto.edit',compact('contacto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contacto $contacto)
    {        
        $contacto->nombre = $request->name;
        $contacto->apellido = $request->lastname;
        $contacto->numero = $request->number;
        $contacto->ci = $request->cia;
        $contacto->direccion = $request->address;
        $contacto->save();
        $datos=Contacto::all();
        return view('contacto.index',compact('datos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacto $contacto)
    {
        $contacto->delete();
        $datos=Contacto::all();
        return view('contacto.index',compact('datos'));
    }
}
