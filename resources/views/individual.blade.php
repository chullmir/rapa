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
	
	// ---- DATOS ACTUALES ----
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

	// ---- DATOS ANTERIORES ----
	$totalPreguntasAnt = [0,0,0,0,0,0,0,0,0,0,0,0,0,0];
	$contadorPreguntasAnt = [0,0,0,0,0,0,0,0,0,0,0,0,0,0];
	$resultadoPreguntasAnt =[0,0,0,0,0,0,0,0,0,0,0,0,0,0];
	foreach ($datosAnt as $dato) {
		$totalPreguntasAnt[1] += $dato->preg1;
		$totalPreguntasAnt[2] += $dato->preg2;
		$totalPreguntasAnt[3] += $dato->preg3;
		$totalPreguntasAnt[4] += $dato->preg4;
		$totalPreguntasAnt[5] += $dato->preg5;
		$totalPreguntasAnt[6] += $dato->preg6;
		$totalPreguntasAnt[7] += $dato->preg7;
		$totalPreguntasAnt[8] += $dato->preg8;
		$totalPreguntasAnt[9] += $dato->preg9;
		$totalPreguntasAnt[10] += $dato->preg10;
		$totalPreguntasAnt[11] += $dato->preg11;
		$totalPreguntasAnt[12] += $dato->preg12;
		$totalPreguntasAnt[13] += $dato->preg13;
		$contadorPreguntasAnt[1]++;
		$contadorPreguntasAnt[2]++;
		$contadorPreguntasAnt[3]++;
		$contadorPreguntasAnt[4]++;
		$contadorPreguntasAnt[5]++;
		$contadorPreguntasAnt[6]++;
		$contadorPreguntasAnt[7]++;
		$contadorPreguntasAnt[8]++;
		$contadorPreguntasAnt[9]++;
		$contadorPreguntasAnt[10]++;
		$contadorPreguntasAnt[11]++;
		$contadorPreguntasAnt[12]++;
		$contadorPreguntasAnt[13]++;
	}
	for ($i=1; $i < 14; $i++) { 
		if ($totalPreguntasAnt[$i] > 0) {
			$resultadoPreguntasAnt[$i] = $totalPreguntasAnt[$i] / $contadorPreguntasAnt[$i];
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
	<h2>Mes: {{date('m')}}</h2>
	<table>
		<tr>
			<th>Pregunta</th>
			<th>Puntaje</th>
			<th>Anterior</th>
			<th>Variación</th>
		</tr>

		@foreach($listadoPreguntas as $pregunta)
		<?php $contRes++ ?>
		<tr>
			<td>{{$pregunta}}</td>
			<td>{{round($resultadoPreguntas[$contRes],1)}}</td>
			<td>{{round($resultadoPreguntasAnt[$contRes],1)}}</td>
			<?php
			if ($resultadoPreguntasAnt[$contRes] > 0) {
				$dif = ($resultadoPreguntas[$contRes] - $resultadoPreguntasAnt[$contRes]) / $resultadoPreguntasAnt[$contRes];
				$dif = round($dif * 100,0);
				$dif = $dif.'%';
			} else {
				$dif = 'N/A';
			}
			
			?>
			<td>{{$dif}}</td>
		</tr>

		@endforeach

	</table>
	
</div>


@endsection