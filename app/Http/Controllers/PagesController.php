<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\PlantillaUno;
use App\Pregunta;

class PagesController extends Controller
{


	public function index(){
		return view('index');
	}
	public function evaluar(){
		$users = User::where('sector_jefe','')->paginate(10);
		return view('evaluar')->with(compact('users'));
	}
	public function calificar($id){
		$preguntas = Pregunta::find(1);
		$sectorPlantilla = [
			'Arriba'=> 1,
			'Conduc Column'=> 1,
			'Cronistas'=> 1,
			'Deportes'=> 1,
			'Noti 13'=> 1,
			'Pgms TN'=> 1,
			'Prod Esp'=> 1,
			'Prod TN'=> 1,
			'Sintesis'=> 1,
			'Telenoche'=> 1,
			'Camaras'=> 2,
			'Directores'=> 2,
			'Edicion'=> 2,
			'Promociones'=> 2,
			'Archivo'=> 3,
			'CAN'=> 3,
			'Ingesta SAT'=> 3,
			'Administracion'=> 4,
			'Mesa'=> 4,
			'Redactor Web'=> 6
		];
		$users = User::find($id);
		// echo $sectorPlantilla[$users->sector_evaluado];
		return view('calificar')->with(compact('users','preguntas'));
	}
	public function enviado(Request $request){
		$plantilla1 = new PlantillaUno;
		$plantilla1->evaluador = 'Hola';
		$plantilla1->evaluado = 'Chau';
		$plantilla1->mes = 2;
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
		return view('enviado')->with(compact('request'));
	}
	public function resultados(){
		return view('resultados');
	}
	public function individual($id){
		return view('individual');
	}
	public function login()
	{
		return view('login');
	}
}
