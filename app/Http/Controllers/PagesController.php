<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	return view('index');
    }
    public function evaluar(){
    	return view('evaluar');
    }
    public function calificar($id){
    	return view('calificar');
    }
    public function enviado(){
    	return view('enviado');
    }
    public function resultados(){
    	return view('resultados');
    }
    public function individual($id){
    	return view('individual');
    }
}
