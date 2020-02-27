<?php

namespace App\Http\Controllers;

use App\Respuesta;
use Illuminate\Http\Request;

class RespuestasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $respuesta = new Respuesta;
        $respuesta->evaluador = 'Hola';
        $respuesta->evaluado = $request->nombre;
        $respuesta->evaluadoID = $request->evaluadoID;
        $respuesta->mes = date('m');
        $respuesta->idPlantilla = $request->idPlantilla;
        $respuesta->preg1 = (($request->preg1) ? $request->preg1 : 0 );
        $respuesta->preg2 = (($request->preg2) ? $request->preg2 : 0 );
        $respuesta->preg3 = (($request->preg3) ? $request->preg3 : 0 );
        $respuesta->preg4 = (($request->preg4) ? $request->preg4 : 0 );
        $respuesta->preg5 = (($request->preg5) ? $request->preg5 : 0 );
        $respuesta->preg6 = (($request->preg6) ? $request->preg6 : 0 );
        $respuesta->preg7 = (($request->preg7) ? $request->preg7 : 0 );
        $respuesta->preg8 = (($request->preg8) ? $request->preg8 : 0 );
        $respuesta->preg9 = (($request->preg9) ? $request->preg9 : 0 );
        $respuesta->preg10 = (($request->preg10) ? $request->preg10 : 0 );
        $respuesta->preg11 = (($request->preg11) ? $request->preg11 : 0 );
        $respuesta->preg12 = (($request->preg12) ? $request->preg12 : 0 );
        $respuesta->preg13 = (($request->preg13) ? $request->preg13 : 0 );
        $respuesta->save();
        // return view('enviado')->with(compact('request'));
        return view('enviado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function show(Respuesta $respuesta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function edit(Respuesta $respuesta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Respuesta $respuesta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Respuesta $respuesta)
    {
        //
    }
}
