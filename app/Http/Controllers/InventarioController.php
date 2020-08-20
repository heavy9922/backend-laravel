<?php

namespace App\Http\Controllers;

use App\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inventario::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Inventario::create($request->all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inve =  Inventario::findOrfail($id);
        $inve->seccion = $request->seccion;
        $inve->posicion = $request->posicion;
        $inve->estado = $request->estado;
        $inve->producto= $request->producto;
        $inve->serial = $request->serial;
        $inve->codigo = $request->codigo;
        $inve->canal = $request->canal;
        $inve->observaciones = $request->observaciones;

        $inve->update();
        return $inve;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inve =  Inventario::findOrfail($id);
        $inve->delete();
    }
}
