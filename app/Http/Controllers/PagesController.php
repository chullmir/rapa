<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
		$users = User::find($id);
		return view('calificar')->with(compact('users'));
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
	public function login()
	{
		return view('login');
	}
}
