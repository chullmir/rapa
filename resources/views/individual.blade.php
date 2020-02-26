<?php
	$listadoPreguntas = [
		$preguntas->pregunta1,
		$preguntas->pregunta2,
		$preguntas->pregunta3,
		$preguntas->pregunta4,
		$preguntas->pregunta5,
		$preguntas->pregunta6,
		$preguntas->pregunta7,
		$preguntas->pregunta8,
		$preguntas->pregunta9,
		$preguntas->pregunta10,
		$preguntas->pregunta11,
		$preguntas->pregunta12,
		$preguntas->pregunta13,
	];
	$totalPreguntas = [0,0,0,0,0,0,0,0,0,0,0,0,0,0];
	$contadorPreguntas = [0,0,0,0,0,0,0,0,0,0,0,0,0,0];
	$resultadoPreguntas =[0,0,0,0,0,0,0,0,0,0,0,0,0,0];

	foreach ($datos as $dato) {
		$totalPreguntas[1] += $dato->preg1;
		$totalPreguntas[2] += $dato->preg2;
		$totalPreguntas[3] += $dato->preg3;
		$totalPreguntas[4] += $dato->preg4;
		$totalPreguntas[5] += $dato->preg5;
		$totalPreguntas[6] += $dato->preg6;
		$totalPreguntas[7] += $dato->preg7;
		$totalPreguntas[8] += $dato->preg8;
		$totalPreguntas[9] += $dato->preg9;
		$totalPreguntas[10] += $dato->preg10;
		$totalPreguntas[11] += $dato->preg11;
		$totalPreguntas[12] += $dato->preg12;
		$totalPreguntas[13] += $dato->preg13;
		$contadorPreguntas[1]++;
		$contadorPreguntas[2]++;
		$contadorPreguntas[3]++;
		$contadorPreguntas[4]++;
		$contadorPreguntas[5]++;
		$contadorPreguntas[6]++;
		$contadorPreguntas[7]++;
		$contadorPreguntas[8]++;
		$contadorPreguntas[9]++;
		$contadorPreguntas[10]++;
		$contadorPreguntas[11]++;
		$contadorPreguntas[12]++;
		$contadorPreguntas[13]++;
	}
	for ($i=1; $i < 14; $i++) { 
		if ($totalPreguntas[$i] > 0) {
			$resultadoPreguntas[$i] = $totalPreguntas[$i] / $contadorPreguntas[$i];
		}
	}
	$contRes = 0;


?>

@extends('layouts.template')
@section('title','Resultado Individual')
@section('content')
<div class="resultado-individual">
	<a href="{{route('resultados')}}" id="boton-volver"><i class="fas fa-step-backward"></i> Volver</a>

	<h1>{{$user->name}}</h1>
	<h2>{{$user->sector_evaluado}}</h2>
	<table>
		<tr>
			<th>Pregunta</th>
			<th>Puntaje</th>
			<th>Anterior</th>
			<th>Promedio</th>
		</tr>

		@foreach($listadoPreguntas as $pregunta)
		<?php $contRes++ ?>
		<tr>
			<td>{{$pregunta}}</td>
			<td>{{round($resultadoPreguntas[$contRes],1)}}</td>
		</tr>

		@endforeach

	</table>
	
</div>


@endsection