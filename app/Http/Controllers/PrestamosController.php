<?php

namespace App\Http\Controllers;

use App\Prestamos;
use Illuminate\Http\Request;

class PrestamosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Prestamos::all();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Prestamos::create($request->all());
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prestamos  $prestamos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $presta = Prestamos::findOrFail($id);
        $presta->codigoDelPrestamo = $request->codigoDelPrestamo;
        $presta->equipoPrestado = $request->equipoPrestado;
        $presta->serial = $request->serial;
        $presta->canal =$request->canal;
        $presta->prestamo = $request->prestamo;
        $presta->mes = $request->mes;
        $presta->devolucionEstaimada = $request->devolucionEstaimada;
        $presta->realDevolucion = $request->realDevolucion;
        $presta->devuelto = $request->devuelto;
        $presta->estadoReal = $request->estadoReal;
        $presta->diasTranscurridos = $request->diasTranscurridos;
        $presta->observaciones = $request->observaciones;

        $presta->update();
        return $presta;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prestamos  $prestamos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $presta = Prestamos::findOrFail($id);
        $presta->delete();
    }
}
