<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\PlantillaUno;
use App\Pregunta;
use App\Respuesta;

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


class PagesController extends Controller
{



	public function index(){
		return view('index');
	}
	public function evaluar(){

		$users = User::where([
			['sector_jefe',''],
			//['sector_evaluado','Mesa']
		])->paginate(300);
		return view('evaluar')->with(compact('users'));
	}
	public function calificar($id){
		$user = User::find($id);

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

		$idPlantilla = $sectorPlantilla[$user->sector_evaluado];
		
		$preguntas = Pregunta::find($idPlantilla);
		
		
		return view('calificar')->with(compact('user','preguntas','idPlantilla'));
	}
	
	public function resultados(){
		$users = User::where([
			['sector_jefe',''],
			// ['sector_evaluado','Sintesis']
		])->paginate(300);
		return view('resultados')->with(compact('users'));
	}
	public function individual($id){
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
		$user = User::find($id);
		$idPlantilla = $sectorPlantilla[$user->sector_evaluado];
		$preguntas = Pregunta::find($idPlantilla);

		$datos = Respuesta::where([
				['evaluadoID','=',$id],
				['mes','=',date('m')]
			])->get();

		$datosAnt = Respuesta::where([
				['evaluadoID','=',$id],
				['mes','=',date('m')-1]
			])->get();

		return view('individual')->with(compact('datos','user','preguntas','datosAnt'));
	}
	public function login()
	{
		return view('login');
	}
}
