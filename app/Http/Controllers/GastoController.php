<?php

namespace App\Http\Controllers;

use App\Gasto;
use Illuminate\Http\Request;

class GastoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Gasto::all();
        return view('Gasto.index',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Gasto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $datos = new Gasto();
        $datos->comida = $request->food;
        $datos->baño = $request->restroom;
        $datos->internet = $request->inter;
        $datos->agua = $request->water;
        $datos->luz = $request->light;
        $datos->save();
        $datos=Gasto::all();
        return view('Gasto.index',compact('datos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gasto  $gasto
     * @return \Illuminate\Http\Response
     */
    public function show(Gasto $gasto)
    {
        return view('Gasto.show',compact('Gasto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gasto  $gasto
     * @return \Illuminate\Http\Response
     */
    public function edit(Gasto $gasto)
    {
        return view('Gasto.edit',compact('Gasto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gasto  $gasto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gasto $gasto)
    {
        $datos->comida = $request->food;
        $datos->baño = $request->restroom;
        $datos->internet = $request->inter;
        $datos->agua = $request->water;
        $datos->luz = $request->light;
        $datos->save();
        $datos=Gasto::all();
        return view('Gasto.index',compact('datos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gasto  $gasto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gasto $gasto)
    {
        $gasto->delete();
        $datos=Gasto::all();
        return view('Gasto.index',compact('datos'));
    }
}
