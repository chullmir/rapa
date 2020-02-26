<?php

namespace App\Http\Controllers;

use App\PlantillaUno;
use Illuminate\Http\Request;

class PlantillaUnosController extends Controller
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
        $plantilla1 = new PlantillaUno;
        $plantilla1->evaluador = 'Hola';
        $plantilla1->evaluado = $request->nombre;
        $plantilla1->evaluadoID = $request->evaluadoID;
        $plantilla1->mes = date('m');
        $plantilla1->preg1 = $request->preg1;
        $plantilla1->preg2 = $request->preg2;
        $plantilla1->preg3 = $request->preg3;
        $plantilla1->preg4 = $request->preg4;
        $plantilla1->preg5 = $request->preg5;
        $plantilla1->preg6 = $request->preg6;
        $plantilla1->preg7 = $request->preg7;
        $plantilla1->preg8 = $request->preg8;
        $plantilla1->preg9 = $request->preg9;
        $plantilla1->preg10 = $request->preg10;
        $plantilla1->preg11 = $request->preg11;
        $plantilla1->preg12 = $request->preg12;
        $plantilla1->preg13 = $request->preg13;
        $plantilla1->save();
        // return view('enviado')->with(compact('request'));
        return view('enviado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PlantillaUno  $plantillaUno
     * @return \Illuminate\Http\Response
     */
    public function show(PlantillaUno $plantillaUno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PlantillaUno  $plantillaUno
     * @return \Illuminate\Http\Response
     */
    public function edit(PlantillaUno $plantillaUno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PlantillaUno  $plantillaUno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlantillaUno $plantillaUno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PlantillaUno  $plantillaUno
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlantillaUno $plantillaUno)
    {
        //
    }
}
