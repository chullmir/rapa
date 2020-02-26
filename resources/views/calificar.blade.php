@extends('layouts.template')
@section('title','Completar')
@section('content')
<div class="calificar">
	<a href="{{route('evaluar')}}" id="boton-volver"><i class="fas fa-step-backward"></i> Volver</a>
	<h1>{{$user->name}} {{$user->lastname}}</h1>
	<h2>{{$user->sector_evaluado}}</h2>
	
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

	?>

	<form action="{{route('enviado')}}" method="post">
		@csrf
		<input type="hidden" name="nombre" value="{{$user->name}} {{$user->lastname}}">
		<input type="hidden" name="evaluadoID" value="{{$user->id}}">
		
		<?php $contador = 0 ?>
		@foreach($listadoPreguntas as $unaPregunta)
			<?php $contador = $contador + 1 ?>
			@if(strlen($unaPregunta)>0)
				
				<div class="form-group">
					<p class="pregunta">{{$contador}}. {{$unaPregunta}}</p>
					<div class="opciones">
						@for($i=1;$i<=5;$i++)
							<input type="radio" id="preg{{$contador}}-{{$i}}" name="preg{{$contador}}" value="{{$i}}">
							<label for="preg{{$contador}}-{{$i}}">{{$i}}</label>
						@endfor
					</div>
				</div>
			@endif
		@endforeach

		
		<input type="submit" value="Enviar" class="submit">
		


		
	</form>
	
</div>



@endsection